<?php 
// Prepare includs/auto lodaer
set_include_path(implode(PATH_SEPARATOR, array(realpath('../library'),get_include_path())));
require_once 'Zend/Loader/Autoloader.php';
$autoloader = Zend_Loader_Autoloader::getInstance();
$autoloader->registerNamespace('Abn_');
define('APPLICATION_PATH', dirname(__FILE__)."/../../");

// Define the app env
defined('APPLICATION_ENV')
|| define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

// Get the application configs
$config = new Zend_Config_Ini('../configs/sis.ini',APPLICATION_ENV);

$comments = $_POST['comments'];
$sis = $_POST['sis'];

if(strlen($sis)){
		$mail = new Zend_Mail();
		$bodytext = "*The following SIS is submitted from demo.flixsyndication.net*\n\n";
		$bodytext .= "http://demo.flixsyndication.net/".$sis."\n\n";
		$bodytext .= "*Additional comments*\n\n";
		$bodytext .= $comments;
		$mail->setBodyText($bodytext);
		$mail->setFrom($config->mail->feedback->from);
		$mail->addTo($config->mail->feedback->to);
		$mail->addCc($config->mail->feedback->cc1);
		$mail->addCc($config->mail->feedback->cc2);
		$mail->addCc($config->mail->feedback->cc3);
		$mail->addCc($config->mail->feedback->cc4);
		$mail->addCc($config->mail->feedback->cc5);

		$mail->setSubject($config->mail->feedback->subject);
		$auth = array(
			'auth' => 'login',
			'username' => $config->mail->username,
			'password' => $config->mail->password,
			'port' => $config->mail->port
		);
		$transport = new Zend_Mail_Transport_Smtp($config->mail->server, $auth);
		Zend_Mail::setDefaultTransport($transport);
		$mail->send();
}
?>
