<?php
/* config start */
$emailAddress = 'jlcalvo@med.ucm.es';
/* config end */

require "contact-form/phpmailer/class.phpmailer.php";
session_name("fancyform");
session_start();

foreach($_POST as $k=>$v)
{
	if(ini_get('magic_quotes_gpc'))
	$_POST[$k]=stripslashes($_POST[$k]);
	
	$_POST[$k]=htmlspecialchars(strip_tags($_POST[$k]));
}

$err = array();
if(!checkLen('name'))
	$err[]='El nombre es demasiado corto o está vacío!';
if(!checkLen('email'))
	$err[]='El nombre es demasiado corto o está vacío!';
else if(!checkEmail($_POST['email']))
	$err[]='Su email no es válido';
if(!checkLen('subject'))
	$err[]='El campo Asunto está vacío!';
if(!checkLen('message'))
	$err[]='El mensaje es demasiado corto o está vacío!';

if(count($err))
{
	if($_POST['ajax'])
	{
		echo '-1';
	}
	else if($_SERVER['HTTP_REFERER'])
	{
		$_SESSION['errStr'] = implode('<br />',$err);
		$_SESSION['post']=$_POST;
		
		header('Location: '.$_SERVER['HTTP_REFERER']);
	}
	exit;
}

$msg=
'Name:	'.$_POST['name'].'<br />
Email:	'.$_POST['email'].'<br />
IP:	'.$_SERVER['REMOTE_ADDR'].'<br /><br />
Message:<br /><br />
'.nl2br($_POST['message']).'
';

$mail = new PHPMailer();
$mail->IsMail();
$mail->AddReplyTo($_POST['email'], $_POST['name']);
$mail->AddAddress($emailAddress);
$mail->SetFrom($_POST['email'], $_POST['name']);
$mail->Subject = "Un mensaje con titulo ".mb_strtolower($_POST['subject'])." de ".$_POST['name']." | desde tu pagina Web";
$mail->MsgHTML($msg);
$mail->Send();

unset($_SESSION['post']);
if($_POST['ajax'])
{
	echo '1';
}
else
{
	$_SESSION['sent']=1;
	
	if($_SERVER['HTTP_REFERER'])
		header('Location: '.$_SERVER['HTTP_REFERER']);
	
	exit;
}
function checkLen($str,$len=2)
{
	return isset($_POST[$str]) && mb_strlen(strip_tags($_POST[$str]),"utf-8") > $len;
}
function checkEmail($str)
{
	return preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $str);
}
?>
