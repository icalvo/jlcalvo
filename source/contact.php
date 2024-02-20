<?php
session_name("fancyform");
session_start();

$_SESSION['n1'] = rand(1,20);
$_SESSION['n2'] = rand(1,20);
$_SESSION['expect'] = $_SESSION['n1']+$_SESSION['n2'];

$str='';
if($_SESSION['errStr'])
{
	$str='<div class="error">'.$_SESSION['errStr'].'</div>';
	unset($_SESSION['errStr']);
}
$success='';
if($_SESSION['sent'])
{
	$success='<h1 class="mail-sent">Muchas gracias!</h1>';
	
	$css='<style type="text/css">#contact-form{display:none;}</style>';
	
	unset($_SESSION['sent']);
}

$page_title = 'Inicio';
$current = 'resume';
require_once 'header.php';
?>

			<ul id="contact-columns" class="clearfix">
			
				<li>
					<img src="img/phone-icon.png" alt="" title="">
					<p>+34912338323
					<br />
					+34644378782
					</p>
				</li>
				
				<li>
					<img src="img/mail-icon.png" alt="" title="">
					<p><a href="mailto:jlcalvo@ucm.es">jlcalvo@ucm.es</a></p>
				</li>
				<li class="address">
					<img src="img/address-icon.png" alt="" title="">
					<p>
						Departamento de Biología Celular
						<br />
						Facultad de Medicina. Universidad Complutense
						<br />
						28040 Madrid (Spain)
					</p>
				</li>
				
			
			</ul><!-- contact-columns end -->

			
			
			<div id="form-container" class="clearfix">
		
				<form id="contact-form" name="contact-form" method="post" action="submit.php">
						
					<div id="content-left">
							
						<ul id="contact-message">
							
							<li>
								<label for="message">Mensaje:</label>
								<textarea name="message" id="message" class="validate[required]" cols="35" rows="5"><?=$_SESSION['post']['message']?></textarea>
							</li>
								
						</ul>
								
					</div><!-- content-left end -->
					
							
					<div id="content-right">
							
						<ul id="contact-info">
							
							<li>
								<label for="name">Nombre:</label>
								<input type="text" class="validate[required,custom[onlyLetter]] " name="name" id="name" value="<?=$_SESSION['post']['name']?>" />
							</li>
				
							<li>
								<label for="email">Email:</label>
								<input type="text" class="validate[required,custom[email]] text-input" name="email" id="email" value="<?=$_SESSION['post']['email']?>" />
							</li>
				
							<li>
								<label for="subject">Asunto:</label>
								<input type="text" class="validate[required] text-input" name="subject" id="subject" value="<?=$_SESSION['post']['subject']?>" />
							</li>
								
							
						</ul>
								
						<div id="submit-btn"><input type="submit" name="button" id="button" class="submit" value="Submit" /></div>
						<?=$str?>
						<div id="contact-loading"><img src="contact-form/img/loading.gif" width="31" height="31" alt="loading" /></div>
								
					</div><!-- content-right end -->
							
      			</form>
				<?=$success?>
			
			</div><!-- form-container end -->
		
<?php

require_once 'footer.php';