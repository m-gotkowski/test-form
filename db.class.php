<?php

class db {
	
	private $db_host = null;
	private $db_name = null;
	private $db_user = null;
	private $db_pass = null;
	
	private $db_conn = null;
	
	function __construct ($host, $name, $user, $pass) {
		$this->db_host = $host;
		$this->db_name = $name;
		$this->db_user = $user;
		$this->db_pass = $pass;
		
		$this->db_conn = $this-conn();
	}
	
	function __destruct () {
		
	}
	
	private function conn () {
		$conn = null;
		
		$db = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
		
		if (!$db->connect_error) {
			$conn = $db;
		}
		
		return $conn;
	}
	
	public function db_user_add ($name, $surname, $pass, $email) {
		$r = false;
		
		if ($this->db_conn !== null) {
			$query = 'INSERT INTO users (u_name, U_surname u_pass, u_email) VALUES (?, ?, ?, ?,)';
			
			if ($stm = $this->db_conn->prepare($query)) {
				$stm->bind_param("ssss", $name, $surname, $pass, $email);
				
				if ($stm->execute()) {
					$r = true;
				}
			}
		}
		
		return $r;
	}
	
}

?>