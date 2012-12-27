<?php 
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . "/ajax/exceptions/QualityCenterSessionException.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Quality Center</title>
	
	<link rel="stylesheet" href="css/ui-lightness/jquery-ui-1.9.2.custom.min.css" />
	<link rel="stylesheet" href="styles/kendo.common.min.css" />
	<link rel="stylesheet" href="styles/kendo.default.min.css" />

	<style type="text/css">
	</style>
	
	<script type="text/javascript" src="js/jquery-1.8.3.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
	<script type="text/javascript" src="js/kendo.web.min.js"></script>
	
	<style type="text/css">

		html, body {
			height:100%;
			margin: 0px;
			overflow: hidden;
			font-size: 11px;
		}
		#menu-pane, #grid-pane {	
			min-height:100%;
			overflow: hidden;
		}
		
	</style>
	<script type="text/javascript">

		(function($) {
	
		    var kendo = window.kendo,
		    ui = kendo.ui,
		    ComboBox = ui.ComboBox
	
		    var TreeBox = ComboBox.extend({
	
		        init: function(element, options) {
		            ComboBox.fn.init.call(this, element, options);
		        },
	
		        options: {
		            name: "TreeBox"
		        }
	
		    });
	
		    ui.plugin(TreeBox);
	
		})($);
		
		var inLogin = false;
		var windowData = null;
		var loginSuccessCallback = null;
		
		function loadDetailField(field, changeCallback, fieldName, type, listId, maxLength){
			switch(type){
				case 'UsersList':
					loadUsersField(field, changeCallback);
					break;
					
				case 'LookupList':
					loadLookupField(field, changeCallback, listId);
					break;
					
				case 'Date':
					field.kendoDatePicker({
	                    format: 'yyyy-MM-dd',
	                    change: function(){
	                        if(changeCallback)
	                       	 changeCallback.apply();
	                    }
	                });
					break;
		                
				case 'DateTime':
					field.kendoDateTimePicker({
	                    format: 'yyyy-MM-dd hh:mm',
	                    change: function(){
	                        if(changeCallback)
	                       	 changeCallback.apply();
	                    }
	                });
					break;
		                
				case 'Number':
					field.kendoNumericTextBox({
						format: '0',
						decimals: 0,
						change: function(){
							if(changeCallback)
								changeCallback.apply();
						},
						spin: function(){
							if(changeCallback)
								changeCallback.apply();
						}
					});
					break;
		               
				case 'Reference':
					loadReferenceField(field, changeCallback, fieldName);
					break;
	
				case 'Memo':
				case 'String':
				default:
					field.attr('maxlength', maxLength);
					field.wrap('<span class="k-textbox" tabindex="-1" />');
					field.keyup(function(){
						if(changeCallback)
							changeCallback.apply();
					});
					break;
			}
		}

		function loadReferenceField(field, changeCallback, fieldName){
			if(relations[fieldName] == null){
				alert('Relation [' + fieldName + '] not found');
				return;
			}

			var fieldNameRelation = relations[fieldName];
			if(relatedDataSources[fieldNameRelation.entityType] == null){
				alert('Related data source [' + fieldNameRelation.entityType + '] for fieldName [' + fieldName + '] not found');
				return;
			}

			// TODO - use tree view
			field.kendoTreeBox({
                dataSource: relatedDataSources[fieldNameRelation.entityType],
                dataTextField: 'label',
                dataValueField: 'value',
                filter: 'contains',
                suggest: true,
				change: function(){
					if(changeCallback)
						changeCallback.apply();
				}
            });
		}
		
		function loadLookupField(field, changeCallback, listId){
			var listElement = listsXml[listId];
			if(listElement != null){
				var items = listElement.find('Item');
				var dataSource = [];
				for(var i = 0; i < items.size(); i++){
					var item = $(items.get(i));
					dataSource.push(item.attr('value'));
				}
				
				field.kendoComboBox({
                    dataSource: dataSource,
                    filter: 'contains',
                    suggest: true,
                    change: function(){
                        if(changeCallback)
                       	 changeCallback.apply();
                    }
                });
			
				return;
			}
		}
		
		function openLoginWindow(loginCallback){
			if(inLogin)
				return;
			inLogin = true;

			loginSuccessCallback = function(){
				if(loginCallback)
					loginCallback.apply();
				
				windowData.close();
			};
			
			if(windowData != null){
				windowData.open();
				windowData.center();
				return;
			}
				
			var window = $('#winLogin');
			window.kendoWindow({
                width: '330px',
                modal: true,
                resizable: false,
                title: 'Quality Center Login',
                close: function(){
                	inLogin = false;
                }
            });
			windowData = window.data("kendoWindow");
			windowData.open();
			windowData.center();

			$('#buttonLogin').click(function(){
				$('#loginError').hide();
				$.ajax({
					url: 'ajax/login.php',
					type: 'POST',
					data: {
						username: $('#username').val(),
						password: $('#password').val()
					},
					cache: false,
					error: function(jqXHR, textStatus, errorThrown){
						$('#loginErrorMessage').text(errorThrown);
						$('#loginError').show();
					},
					success: loginSuccessCallback
				});
			});
		}
		
		function handleAjaxError(code, message, loginCallback){
			switch(code){
				case '<?php echo QualityCenterSessionException::NO_SESSION; ?>':
					openLoginWindow(loginCallback);
					break;
					
				default:
					alert(message);
			}
		}
		
		function loadUsersField(field, changeCallback){
			field.kendoAutoComplete({
                 dataSource: usersDataSource,
                 filter: 'startswith',
                 placeholder: 'Select user...',
                 change: function(){
                     if(changeCallback)
                    	 changeCallback.apply();
                 }
             });
		}
		
		var relations = {
			'detected-in-rcyc': {
				entityType: 'release-cycle',
				objectType: 'releaseCycle',
				identifier: 'id',
				label: 'name'
			},
			'detected-in-rel': {
				entityType: 'release',
				objectType: 'release',
				identifier: 'id',
				label: 'name'
			},
			'target-rcyc': {
				entityType: 'release-cycle',
				objectType: 'releaseCycle',
				identifier: 'id',
				label: 'name'
			},
			'target-rel': {
				entityType: 'release',
				objectType: 'release',
				identifier: 'id',
				label: 'name'
			}
		};

		var relatedDataSources = {};
		var usersDataSource = null;
		var listsXml = {};
		var entitiesXml = {};
		
		function loadDataSources(){
			usersDataSource.fetch();
			for(var field in relations){
				var entityType = relations[field].entityType;
				if(relatedDataSources[entityType] != null)
					relatedDataSources[entityType].fetch();
			}
		}

		var consumersEnabled = true;
		var filterConsumers = {};
		function registerFilterConsumer(entityType, callback){
			filterConsumers[entityType] = callback;
		}

		function applyFilter(entityType){
			if(consumersEnabled && filterConsumers[entityType])
				filterConsumers[entityType].apply();
		}
		
		function fieldChanged(entityType, field){
			var filter = $('.filter-' + entityType);
			var fieldName = field.data('field');
			var checkbox = filter.find('.enable-' + fieldName);
			consumersEnabled = false;
			checkbox.attr('checked', true);
			consumersEnabled = true;
			applyFilter(entityType);
		}
		
		function loadFilterFields(entityType){
			if(entitiesXml[entityType] == null)
			{
				loadEntityXml(entityType, function(){
					loadFilterFields(entityType);
				});
				return;
			}
	
			var filter = $('.filter-' + entityType);
			
			filter.find('.filter-enable').change(function(){
				applyFilter(entityType);
			});
			
			filter.find('.filter-field').each(function(){
				var field = $(this);
				var fieldName = field.data('field');
				var element = entitiesXml[entityType].find('Field[Name="' + fieldName + '"]');
				if(element.size()){
					var type = element.find('Type').text();
					var listId = element.find('List-Id').text();
					var maxLength = element.find('Size').text();
					var changeCallback = function(){
						fieldChanged(entityType, field);
					};
					
					loadDetailField(field, changeCallback, fieldName, type, listId, maxLength);
				}
			});
		}

		function loadEntityXml(entityType, callback){
			$.ajax({
				url: 'ajax/entity.xml.php?entity=' + entityType,
				cache: true,
				dataType: 'xml',
				success: function(xmlDoc, textStatus, jqXHR){
					entitiesXml[entityType] = $(xmlDoc);
					if(callback)
						callback.apply();
				},
				error: function(jqXHR, textStatus, errorThrown){
					handleAjaxError(jqXHR.getResponseHeader('X-QualityCenterWebException'), errorThrown, callback);
				}
			});
		}

		$(document).ready(function() {

			loadEntityXml('defect');

			$.ajax({
				url: 'ajax/lists.xml.php',
				cache: true,
				dataType: 'xml',
				success: function(xmlDoc, textStatus, jqXHR){
					var lists = $(xmlDoc).find('List');
					lists.each(function(){
						var list = $(this);
						var listId = list.find('Id').text();
						listsXml[listId] = list;
					});
				},
				error: function(jqXHR, textStatus, errorThrown){
					handleAjaxError(jqXHR.getResponseHeader('X-QualityCenterWebException'), errorThrown);
				}
			});
			
			$( '#menu-pane' ).accordion({
	            heightStyle: 'fill',
	            activate: function( event, ui ){
	                /**
	                 * ui{
	                 * 	newHeader: jQuery,
	                 * 	oldHeader: jQuery,
	                 * 	newPanel: jQuery,
	                 * 	oldPanel: jQuery,
	                 * }
	                 */
	                var menu = ui.newHeader.attr('id');
	                switch(menu){
		                case 'menu-dashboard':
			                break;
			                
		    			case 'menu-defects':
			    			$('#grid-pane').load('defects.php');
			    			$('#filter-pane').load('entities.filter.php?entity=defect');
			                break;
			                
		    			case 'menu-tests':
			                break;
	                }
				}
	        });
	        
			$('#main-pane').kendoSplitter({
				panes: [
					{ collapsible: true, size: '260px' },
					{ collapsible: false },
					{ collapsible: true, size: '300px' }
				]
			});
	
			$( '#menu-pane' ).accordion( 'refresh' );

			$( window ).resize(function(){
				$( '#menu-pane' ).accordion( 'refresh' );
			});
			
			usersDataSource = new kendo.data.DataSource({
				transport: {
					read:  {
						url: 'ajax/users.php',
						type: 'post',
						dataType: 'json',
						error: function(jqXHR, textStatus, errorThrown){
							handleAjaxError(jqXHR.getResponseHeader('X-QualityCenterWebException'), errorThrown);
						}
					},
					parameterMap: function(options, operation) {
						options.operation = operation;
						return options;
					}
				},
				schema: {
					parse: function(response){
						var ret = [];
						for(var i = 0; i < response.length; i++)
							ret.push(response[i].name);
						
						return ret;
					}
				}
			});

			relatedDataSources = {};
			for(var field in relations){
				var entityType = relations[field].entityType;
				if(relatedDataSources[entityType] != null)
					continue;
				
				relatedDataSources[entityType] = new kendo.data.DataSource({
					transport: {
						read:  {
							url: 'ajax/entities.php',
							type: 'post',
							dataType: 'json'
						},
						parameterMap: function(options, operation) {
							options.entityType = relations[field].objectType;
							options.operation = operation;
							return options;
						}
					},
					error: function(e){					
						handleAjaxError(e.xhr.getResponseHeader('X-QualityCenterWebException'), e.errorThrown);
					},
					schema: {
						parse: function(response){
							var ret = [];
							for(var i = 0; i < response.length; i++){
								ret.push({
									value: response[i][relations[field].identifier],
									label: response[i][relations[field].label]
								});
							}
							
							return ret;
						}
					}
				});
			}
			
			$.ajax({
				url: 'ajax/login.php',
				cache: false,
				error: function(jqXHR, textStatus, errorThrown){
					handleAjaxError(jqXHR.getResponseHeader('X-QualityCenterWebException'), errorThrown, loadDataSources);
				}
			});
		});
	</script>
</head>
<body>
	<div id="main-pane" style="height: 100%; width: 100%;">
		<div id="menu-pane">
			<h3 id="menu-dashboard">Dashboard</h3>
			<div>
				<!-- TODO -->
				Chart links?
			</div>
			<h3 id="menu-defects">Defects</h3>
			<div>
				<!-- TODO -->
				Defects summary
			</div>
			<h3 id="menu-tests">Tests</h3>
			<div>
				<!-- TODO -->
				Tests tree
			</div>
		</div>
		<div id="grid-pane"></div>
		<div id="filter-pane"></div>
	</div>

	<div style="display: none;">
		<div id="winLogin" style="text-align: center;">
			<table border="0" cellpadding="0" cellspacing="10">
				<div id="loginError" style="display: none; color: red;">
					<span style="font-weight: bold;">Error: </span>
					<span id="loginErrorMessage"></span>
				</div>
				<tr>
					<td>Username: </td>
					<td><span class="k-textbox" tabindex="-1"><input type="text" id="username" /></span></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><span class="k-textbox" tabindex="-1"><input type="password" id="password" /></span></td>
				</tr>
			</table>
			<span id="buttonLogin" class="k-button">Login</span>
		</div>
	</div>
</body>
</html>