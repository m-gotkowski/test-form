<?php


require_once 'antiBot.class.php';
require_once 'clear.class.php';
require_once 'db.class.php';


session_start();


if (emtpy($_SESSION['magic_key'])) {
	$_SESSION['magic_key'] = $ab->magicKeyGenerate(16);
}
else {
	$_SESSION['magic_key'] = null;
}


$ab = new antiBot();
$clear = new clear();


?>