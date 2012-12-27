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

		function loadColumnEditor(container, options){
			var field = $('<input type="text" class="field-' + options.field + '" data-bind="value:' + options.field + '" />');
			field.appendTo(container);

			if(entitiesXml.defect == null)
				return;

			var value = options.model[options.field];
			var element = entitiesXml.defect.find('Field[Name="' + options.field + '"]');
			var type = element.find('Type').text();
			var listId = element.find('List-Id').text();
			var maxLength = element.find('Size').text();
			loadDetailField(field, null, options.field, type, listId, maxLength);
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


		function loadDetailFields(tabstrip){

			tabstrip.find('.form-field').each(function(){
				var item = $(this);
				var fieldName = item.data('field');
				var fieldAttr = item.data('attr');
				var value = item.data('value');
				var element = entitiesXml.defect.find('Field[Name="' + fieldName + '"]');
				var type = element.find('Type').text();
				
				var field = $('<input type="text" class="details-field field-' + fieldName + '" data-field="-' + fieldName + '" data-attr="' + fieldAttr + '" value="' + value + '" />');
				var fieldTd = $('<td class="input" />');
				fieldTd.append(field);
				
				item.append('<td class="label">' + element.attr('Label') + '</td>');
				item.append(fieldTd);

				var listId = element.find('List-Id').text();
				var maxLength = element.find('Size').text();
				loadDetailField(field, null, fieldName, type, listId, maxLength);
			});
		}

		var dataSource;
		function loadDefects() {

			dataSource = new kendo.data.DataSource({
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
				serverPaging: true,
				serverSorting: true,
				serverFiltering: true,
				pageSize: 20,
				error: function(e){					
					handleAjaxError(e.xhr.getResponseHeader('X-QualityCenterWebException'), e.errorThrown, loadDefects);
				},
				schema: {
					data: 'items',
					total: 'totalCount',
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
				
//				TODO add server side support for sorting
//						
//				sortable: {
//			        mode: "multiple",
//			        allowUnsort: true
//				},
				
				filterable: false,
                
				edit: function (event){
					var grid = $("#grid").data("kendoGrid");
					grid.expandRow(event.container);
				},
                
				detailInit: function (event){
					var detailRow = event.detailRow;
					gridDetailInit(detailRow.find('.tabstrip'));
				},

				detailExpand: function (event){
					if(entitiesXml.defect != null){
						var detailRow = event.detailRow;
						loadDetailFields(detailRow.find('.tabstrip'));
					}
				}
	
			});
	
			$( window ).resize(function(){
				var dataGrid = $('#grid').data('kendoGrid');
				dataGrid.refresh();
			});
		}

		function applyDefectsFilter(){
			var filterForm = $('.filter-defect');
			var filter = [];

			filterForm.find('.filter-enable:checked').each(function(){
				var checkbox = $(this);
				var attribute = checkbox.data('attr');
				var fieldName = checkbox.data('field');
				var field = filterForm.find('.field-' + fieldName + '[data-field="' + fieldName + '"]');
				filter.push({
					field: attribute, 
					operator: 'eq', 
					value: field.val()
				});
			});
			dataSource.filter(filter);
		}
		
		$(document).ready(function () {
			loadDefects();
			registerFilterConsumer('defect', function(){
				applyDefectsFilter();
			});
		});
		
	</script>
</head>
<body>
	<div id="grid"></div>
</div>
</body>
</html>