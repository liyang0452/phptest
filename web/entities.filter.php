<?php 
/**
 * @package External
 * @subpackage qc.services
 */

$entity = isset($_GET['entity']) ? $_GET['entity'] : '';

function translateToObjectName($name)
{
	return lcfirst(preg_replace('/[^\w\d]/', '', ucwords(str_replace('-', ' ', $name))));
}

?>
<!DOCTYPE html>
<html>
<head>
	<script>
		
		$(document).ready(function() {
			loadFilterFields('<?php echo $entity; ?>');
		});
		
	</script>
</head>
<body>
	<div class="filter-<?php echo $entity; ?>">
		<?php
			$filename = __DIR__ . "/../generator/xml/entities/$entity.fields.xml";
			if(file_exists($filename))
			{
				// load the XML source
				$xml = new DOMDocument();
				$xml->load($filename);
				
				// load the XSL source
				$xsl = new DOMDocument();
				$xsl->load('xsl/filter.xsl');
				
				// configure the transformer
				$proc = new XSLTProcessor();
				$proc->registerPHPFunctions();
				$proc->importStyleSheet($xsl); // attach the xsl rules
				
				$html = $proc->transformToDoc($xml);
				echo $html->saveHTML();
			}
		?>
	</div>
</body>
</html>