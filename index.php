<?php

require_once 'loader.php';



$form = [
	'magic_key' => $_SESSION['magic_key'],
	'user_name' => null,
	'user_surname' => null,
	'user_mail' => null,
	'user_pass' => null,
	'user_pass_confirm' => null
];



?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Test - form</title>
</head>
<body>
	
	<form method="post" action="ajax.php" id="actionForm">
		<input id="testVal" type="hidden" name="test_val" value="<?=$form['magic_key'] ?>" />
		<input type="hidden" name="view" value="testForm" />
		
		<input id="userName" type="text" name="user_name" value="<?=$form['user_name'] ?>" />
		<input id="userSurname" type="text" name="user_surname" value="<?=$form['user_surname'] ?>" />
		<input id="userMail" type="text" name="user_mail" value="<?=$form['user_mail'] ?>" />
		<input id="userPass" type="text" name="user_pass" value="<?=$form['user_pass'] ?>" />
		<input id="userPassConfirm" type="text" name="user_pass_confirm" value="<?=$form['user_pass_confirm'] ?>" />
		
		
		<button type="submit">Ok</button>
	</form>
	
</body></html>