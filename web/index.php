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

	<script src="js/jquery-1.8.3.js"></script>
	<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="js/kendo.web.min.js"></script>
	
	<style type="text/css">

		html, body {
			height:100%;
			margin: 0px;
			overflow: hidden;
		}
		#menu-pane, #grid-pane {	
			min-height:100%;
			overflow: hidden;
		}
		
	</style>
	<script>

		var inLogin = false;
		var windowData = null;
		var loginSuccessCallback = null;
		
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
		
		$(document).ready(function() {
	
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
			                break;
			                
		    			case 'menu-tests':
			                break;
	                }
				}
	        });
	        
			$('#main-pane').kendoSplitter({
				panes: [
					{ collapsible: true, size: '260px' },
					{ collapsible: false }
				]
			});
	
			$( '#menu-pane' ).accordion( 'refresh' );

			$( window ).resize(function(){
				$( '#menu-pane' ).accordion( 'refresh' );
			});

			$.ajax({
				url: 'ajax/login.php',
				cache: false,
				error: function(jqXHR, textStatus, errorThrown){
					handleAjaxError(jqXHR.getResponseHeader('X-QualityCenterWebException'), errorThrown);
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
		<div id="grid-pane">
			<div>
				<!-- TODO -->
				Data Grid
			</div>
		</div>
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