<?php 

	function parseConfig(array $array, $delimiter = '.')
	{
		foreach($array as $field => $value)
		{
			if(is_array($value) || !strpos($field, '.'))
				continue;
				
			list($parentField, $childField) = explode($delimiter, $field, 2);
//			echo "split [$parentField][$childField] = [$value] <br/>\n";
			if(isset($array[$parentField]))
			{
				if(!is_array($array[$parentField]))
					throw new QualityCenterConfigException("Attribute [$parentField] defined more than once", QualityCenterConfigException::INVALID_FORMAT);
			}
			else
			{
				$array[$parentField] = array();
			}
			$array[$parentField][$childField] = $value;
			unset($array[$field]);
		}
	
		foreach($array as $field => $value)
		{
			if(is_array($value))
				$array[$field] = parseConfig($value, $delimiter);
		}
		
		return $array;
	}
	
	$config = parseConfig(parse_ini_file(__DIR__ . '/../config.ini', true));
	
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.details li {list-style: none; font-weight: bold;}
		.details table, .details td {border: 0px; font-weight: normal;}
		.details td.label {width: 250px;}
	</style>
	<script type="text/x-kendo-template" id="template">
		<div class="tabstrip" id="defect-edit-#= id #">
			<ul>
				<li class="k-state-active">
					Description
				</li>
				<li>
				   Details
				</li>
				<li>
				   Attachements
				</li>
				<li>
				   Linked Entities
				</li>
				<li>
				   History
				</li>
			</ul>
			<div>
				<table border="0" cellpadding="0" cellspacing="0">
					<tr>
						<th>Description</th>
						<th>Comments</th>
					</tr>
					<tr>
						<td><textarea class="defect-description" rows="10" cols="30" style="width:100%; height:440px">#= description #</textarea></td>
						<td><textarea class="defect-comments" rows="10" cols="30" style="width:100%; height:440px">#= devComments #</textarea></td>
					</tr>
				</table>
			</div>
			<div class="details">
				<ul>
					<?php
						foreach($config['defects']['grid']['details'] as $sectionName => $section)
						{
							?>
					<li>
						<label><?php echo $section['title']; ?></label>
						<table>
							<?php
								foreach($section['fields'] as $fieldName => $field)
								{
									$attr = $field['attr'];
									if(isset($field['edit']) && $field['edit'])
									{
										echo "<tr class=\"form-field\" data-field=\"$fieldName\" data-attr=\"$attr\" data-value=\"#= $attr #\" />\n";
									}
									else
									{
										$title = $field['title'];
										echo "<tr><td>$title</td><td>#= $attr #</td></tr>\n";										
									}
								}
							?>
						</table>
					</li>
							<?php
						}
					?>
				</ul>
			</div>
			<div>
				<!-- TODO -->
			   Attachements
			</div>
			<div>
				<!-- TODO -->
			   Linked Entities
			</div>
			<div>
				<!-- TODO -->
			   History
			</div>
		</div>
	</script>
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
		
		function detailInit(event){
			var detailRow = event.detailRow;

			detailRow.find('.tabstrip').kendoTabStrip({
				animation: {
					open: { effects: 'fadeIn' }
				}
			});

			detailRow.find('.defect-description').kendoEditor();
			detailRow.find('.defect-comments').kendoEditor();
		}

		var defectsXml = null;
		var listsXml = {};
		var relatedDataSources = {};
		var usersDataSource = null;

		function loadColumnEditor(container, options){
			var field = $('<input type="text" class="field-' + options.field + '" data-bind="value:' + options.field + '" />');
			field.appendTo(container);

			if(defectsXml == null)
				return;

			var value = options.model[options.field];
			var element = defectsXml.find('Field[Name="' + options.field + '"]');
			var type = element.find('Type').text();
			var listId = element.find('List-Id').text();
			var maxLength = element.find('Size').text();
			loadDetailField(field, options.field, type, listId, maxLength);
		}
		
		function loadLookupField(field, listId){
			if(listsXml[listId] != null){
				var items = listsXml[listId].find('Item');
				var dataSource = [];
				for(var i = 0; i < items.size(); i++){
					var item = $(items.get(i));
					dataSource.push(item.attr('value'));
				}
				
				field.kendoComboBox({
                    dataSource: dataSource,
                    filter: 'contains',
                    suggest: true
                });
			
				return;
			}

			$.ajax({
				url: 'ajax/list.xml.php?listId=' + listId,
				cache: true,
				dataType: 'xml',
				success: function(xmlDoc, textStatus, jqXHR){
					listsXml[listId] = $(xmlDoc);
					loadLookupField(field, listId);
				}
			});
		}

		function loadReferenceField(field, fieldName){
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
                suggest: true
            });
		}
		
		function loadUsersField(field){
			field.kendoAutoComplete({
                 dataSource: usersDataSource,
                 filter: 'startswith',
                 placeholder: 'Select user...'
             });
		}

		function gridDetailInit(tabstrip){
			tabstrip.kendoTabStrip({
				animation: {
					open: { effects: 'fadeIn' }
				}
			});

			tabstrip.find('.defect-description').kendoEditor();
			tabstrip.find('.defect-comments').kendoEditor();
		}

		function loadDetailField(field, fieldName, type, listId, maxLength){
			switch(type){
				case 'UsersList':
					loadUsersField(field);
					break;
					
				case 'LookupList':
					loadLookupField(field, listId);
					break;
					
				case 'Date':
					field.kendoDatePicker({
	                    format: 'yyyy-MM-dd'
	                });
					break;
		                
				case 'DateTime':
					field.kendoDateTimePicker({
	                    format: 'yyyy-MM-dd hh:mm'
	                });
					break;
		                
				case 'Number':
					field.kendoNumericTextBox({
						format: '0',
						decimals: 0
					});
					break;
		               
				case 'Reference':
					loadReferenceField(field, fieldName);
					break;
	
				case 'Memo':
				case 'String':
				default:
					field.attr('maxlength', maxLength);
					field.wrap('<span class="k-textbox" tabindex="-1" />');
					break;
			}
		}

		function loadDetailFields(tabstrip){

			tabstrip.find('.form-field').each(function(){
				var item = $(this);
				var fieldName = item.data('field');
				var fieldAttr = item.data('attr');
				var value = item.data('value');
				var element = defectsXml.find('Field[Name="' + fieldName + '"]');
				var type = element.find('Type').text();
				
				var field = $('<input type="text" class="details-field field-' + fieldName + '" data-field="-' + fieldName + '" data-attr="' + fieldAttr + '" value="' + value + '" />');
				var fieldTd = $('<td class="input" />');
				fieldTd.append(field);
				
				item.append('<td class="label">' + element.attr('Label') + '</td>');
				item.append(fieldTd);

				var listId = element.find('List-Id').text();
				var maxLength = element.find('Size').text();
				loadDetailField(field, fieldName, type, listId, maxLength);
			});
		}

		function loadDefects() {

			var dataSource = new kendo.data.DataSource({
				transport: {
					read:  {
						url: 'ajax/entities.php',
						type: 'post',
						dataType: 'json'
					},
					update: {
						url: 'ajax/entities.php',
						type: 'post',
						dataType: 'json'
					},
					destroy: {
						url: 'ajax/entities.php',
						type: 'post',
						dataType: 'json'
					},
					create: {
						url: 'ajax/entities.php',
						type: 'post',
						dataType: 'json'
					},
					parameterMap: function(options, operation) {
						options.entityType = 'defect';
						options.operation = operation;

						if(operation == 'update'){
							options.updates = {};
							for(var i = 0; i < options.models.length; i++){
								var model = options.models[i];
								var update = {
									<?php 
										$copies = array();
										foreach($config['defects']['grid']['columns'] as $field => $settings)
										{
											if($settings['edit'])
												$copies[] = "$field: model.$field";
										}
										echo implode(',', $copies);
									?>
								};
								
								$('#defect-edit-' + model.id).find('.details-field').each(function(){
									var fieldAttr = $(this).data('attr');
									update[fieldAttr] = $(this).val();
								});
								
								options.updates[model.id] = update;
							}
						}
						
						return options;
					}
				},
				batch: true,
				pageSize: 20,
				error: function(e){					
					handleAjaxError(e.xhr.getResponseHeader('X-QualityCenterWebException'), e.errorThrown, loadDefects);
				},
				schema: {
					model: {
						id: 'id',
						fields: {
							<?php 
								$fields = array();
								foreach($config['defects']['grid']['columns'] as $field => $settings)
								{
									if(!$settings['edit'])
										$fields[] = "$field: {editable: false}";
								}
								echo implode(',', $fields);
							?>
						}
					}
				}
			});

			$('#grid').kendoGrid({
				dataSource: dataSource,
				pageable: true,
				detailTemplate: kendo.template($('#template').html()),
				height: '100%',
				toolbar: ['create'],
				columns: [
					<?php 
						$fields = array();
						foreach($config['defects']['grid']['columns'] as $field => $settings)
						{
							$title = $field;
							$width = '';
							$editor = '';
							
							if(isset($settings['title']))
								$title = $settings['title'];
								
							if(isset($settings['width']))
								$width = ", width: '" . $settings['width'] . "px'";
								
							if(isset($settings['edit']) && $settings['edit'])
								$editor = ', editor: loadColumnEditor ';
								
							echo "{ field: '$field' , title: '$title' $width $editor},";
						}
					?>
					{ command: ['edit', 'destroy'], title: '&nbsp;', width: '170px' }
				],
				editable: {
					update: true,
					destroy: true,
					confirmation: 'Are you sure you want to delete this defect?',
					mode: 'inline'
				},
                
				edit: function (event){
					var grid = $("#grid").data("kendoGrid");
					grid.expandRow(event.container);
				},
                
				detailInit: function (event){
					var detailRow = event.detailRow;
					gridDetailInit(detailRow.find('.tabstrip'));
				},

				detailExpand: function (event){
					if(defectsXml != null){
						var detailRow = event.detailRow;
						loadDetailFields(detailRow.find('.tabstrip'));
					}
				}
	
			});
	
			$( window ).resize(function(){
				var dataGrid = $('#grid').data('kendoGrid');
				dataGrid.refresh();
			});

			usersDataSource = new kendo.data.DataSource({
				transport: {
					read:  {
						url: 'ajax/users.php',
						type: 'post',
						dataType: 'json',
						error: function(jqXHR, textStatus, errorThrown){
							handleAjaxError(jqXHR.getResponseHeader('X-QualityCenterWebException'), errorThrown, loadDefects);
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
			usersDataSource.fetch();

			$.ajax({
				url: 'ajax/entity.xml.php?entity=defect',
				cache: true,
				dataType: 'xml',
				success: function(xmlDoc, textStatus, jqXHR){
					defectsXml = $(xmlDoc);
				},
				error: function(jqXHR, textStatus, errorThrown){
					handleAjaxError(jqXHR.getResponseHeader('X-QualityCenterWebException'), errorThrown, loadDefects);
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
						handleAjaxError(e.xhr.getResponseHeader('X-QualityCenterWebException'), e.errorThrown, loadDefects);
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
				relatedDataSources[entityType].fetch();
			}
		}
		
		
		$(document).ready(function () {
			loadDefects();
		});
		
	</script>
</head>
<body>
	<div id="grid"></div>
</div>
</body>
</html>