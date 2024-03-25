<?php

require_once 'loader.php';


if (isset($_POST['view'])&& $_POST['view'] === 'testForm') {
	$db = new db_conn();
	
	
	$user_data = [
		'user_name' => null,
		'user_surname' => null,
		'user_mail' => null,
		'user_pass' => null
	];
	
	if (isset($_POST['user_mail'])) {
		$user_data['user_mail'] = $clear->c_email($_POST['user_mail']);
		
		$db->db_user_add($user_data['user_name'], $user_data['user_surname'], $user_data['user_mail'], $user_data['user_pass']);
	}
}



?>