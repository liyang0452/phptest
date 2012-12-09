<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.details li {list-style: none; font-weight: bold;}
		.details table, .details td {border: 0px; font-weight: normal;}
		.details td.label {width: 250px;}
	</style>
	<script type="text/x-kendo-template" id="template">
		<div class="tabstrip">
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
					<li>
						<label>Metadata</label>
						<table>
							<tr class="form-field" data-field="name" data-value="#= name #" />
							<tr class="form-field" data-field="status" data-value="#= status #" />
						</table>
					</li>
					<li>
						<label>Detection</label>
						<table>
							<tr class="form-field" data-field="detected-by" data-value="#= detectedBy #" />
							<tr class="form-field" data-field="severity" data-value="#= severity #" />
							<tr class="form-field" data-field="detected-in-rcyc" data-value="#= detectedInRcyc #" />
							<tr class="form-field" data-field="detected-in-rel" data-value="#= detectedInRel #" />
							<tr class="form-field" data-field="detection-version" data-value="#= detectionVersion #" />
						</table>
					</li>
					<li>
						<label>Solution</label>
						<table>
							<tr class="form-field" data-field="owner" data-value="#= owner #" />
							<tr class="form-field" data-field="priority" data-value="#= priority #" />
							<tr class="form-field" data-field="target-rcyc" data-value="#= targetRcyc #" />
							<tr class="form-field" data-field="target-rel" data-value="#= targetRel #" />
							<tr class="form-field" data-field="planned-closing-ver" data-value="#= plannedClosingVer #" />
							<tr class="form-field" data-field="closing-version" data-value="#= closingVersion #" />
							<tr class="form-field" data-field="closing-date" data-value="#= closingDate #" />
							<tr class="form-field" data-field="estimated-fix-time" data-value="#= estimatedFixTime #" />
							<tr class="form-field" data-field="actual-fix-time" data-value="#= actualFixTime #" />
						</table>
					</li>
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
	<script>

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

		function loadReferenceField(field, attribute){
			if(relations[attribute] == null){
				alert('Relation [' + attribute + '] not found');
				return;
			}

			var attributeRelation = relations[attribute];
			if(relatedDataSources[attributeRelation.entityType] == null){
				alert('Related data source [' + attributeRelation.entityType + '] for attribute [' + attribute + '] not found');
				return;
			}

			// TODO - use tree view
			field.kendoComboBox({
                dataSource: relatedDataSources[attributeRelation.entityType],
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

		function loadDetailFields(event){
			var detailRow = event.detailRow;

			detailRow.find('.form-field').each(function(){
				var item = $(this);
				var attribute = item.data('field');
				var value = item.data('value');
				var element = defectsXml.find('Field[Name="' + attribute + '"]');
				var type = element.find('Type').text();
				
				var field = $('<input type="text" class="field-' + attribute + '" value="' + value + '" />');
				var fieldTd = $('<td class="input" />');
				fieldTd.append(field);
				
				item.append('<td class="label">' + element.attr('Label') + '</td>');
				item.append(fieldTd);

				switch(type){
					case 'UsersList':
						loadUsersField(field);
						break;
						
					case 'LookupList':
						var listId = element.find('List-Id').text();
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
						loadReferenceField(field, attribute);
						break;

					case 'Memo':
					case 'String':
					default:
						var maxLength = element.find('Size').text();
						field.attr('maxlength', maxLength);
						field.wrap('<span class="k-textbox" tabindex="-1" />');
						break;
				}
			});
		}

		function loadDefects() {

			var dataSource = new kendo.data.DataSource({
				transport: {
					read:  {
						url: 'ajax/entities.php',
						type: 'post',
						dataType: 'json',
						error: function(jqXHR, textStatus, errorThrown){
							handleAjaxError(jqXHR.getResponseHeader('X-QualityCenterWebException'), errorThrown, loadDefects);
						}
					},
					update: {
						url: 'ajax/entities.php',
						type: 'post',
						dataType: 'json',
						error: function(jqXHR, textStatus, errorThrown){
							handleAjaxError(jqXHR.getResponseHeader('X-QualityCenterWebException'), errorThrown, loadDefects);
						}
					},
					destroy: {
						url: 'ajax/entities.php',
						type: 'post',
						dataType: 'json',
						error: function(jqXHR, textStatus, errorThrown){
							handleAjaxError(jqXHR.getResponseHeader('X-QualityCenterWebException'), errorThrown, loadDefects);
						}
					},
					create: {
						url: 'ajax/entities.php',
						type: 'post',
						dataType: 'json',
						error: function(jqXHR, textStatus, errorThrown){
							handleAjaxError(jqXHR.getResponseHeader('X-QualityCenterWebException'), errorThrown, loadDefects);
						}
					},
					parameterMap: function(options, operation) {
						options.entityType = 'defect';
						options.operation = operation;
						return options;
					}
				},
				batch: true,
				pageSize: 20,
				schema: {
					model: {
						id: 'id',
						fields: {
							id: { editable: false, nullable: true },
							name: { validation: { required: true } },
							owner: { type: 'string' },
							severity: { type: 'string' },
							detectedBy: { type: 'string' }
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
					{ field: 'id', title: 'ID', width: '60px' },
					{ field: 'severity', title: 'Severity', width: '90px' },
					{ field: 'status', title: 'Status', width: '90px' },
					{ field: 'name', title: 'Summary' },
					{ field: 'owner', title: 'Assigned to', width: '100px' },
					{ field: 'detectedBy', title:'Detected by', width: '100px' },
					{ field: 'creationTime', title:'Detected at', type: 'date', width: '100px' },
                    { command: ['edit', 'destroy'], title: '&nbsp;', width: '170px' }
				],
                editable: 'inline',
                
				detailInit: function (event){
					var detailRow = event.detailRow;

					detailRow.find('.tabstrip').kendoTabStrip({
						animation: {
							open: { effects: 'fadeIn' }
						}
					});

					detailRow.find('.defect-description').kendoEditor();
					detailRow.find('.defect-comments').kendoEditor();
				},

				detailExpand: function (event){
					if(defectsXml != null){
						loadDetailFields(event);
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
							dataType: 'json',
							error: function(jqXHR, textStatus, errorThrown){
								handleAjaxError(jqXHR.getResponseHeader('X-QualityCenterWebException'), errorThrown, loadDefects);
							}
						},
						parameterMap: function(options, operation) {
							options.entityType = relations[field].objectType;
							options.operation = operation;
							return options;
						}
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