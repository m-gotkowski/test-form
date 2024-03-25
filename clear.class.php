<?php


class antiBot {
	
	function __construct () {
		
	}
	
	public function c_email ($email_in) {
		
		$email = null;
		
		if (preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z-][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,12}$/i", $email_in)) {
			
			list($mail_user, $mail_domain) = explode("@", $email_in);
			
			if (checkdnsrr($mail_domain, 'MX')) {
				$email = $email_in;
			}
		}
		
		return $email;
	}
	
	public function c_name ($name_in) {
		
		$name = null;
		
		$tmp = trim(preg_replace("/[^a-zA-ZąćęłńóśżźĄĆĘŁŃÓŚŻŹĄĆĘŁŃÓŚŻŹ0-9 ]+/i", "", $name_in));
		
		if ($name_in === $tmp) {
			$name = $tmp;
		}
		
		return $name;
	}
	
}



?>