<?php


class antiBot {
	
	private $magicKeyLength = 32;
	// private $magicKeyCurrent = null;
	// private $magicKeyStatus = false;
	
	function __construct () {
		
		
		
	}
	
	public function magicKeyGenerate ($length = 32) {
		
		$string = "";
		$chars = "abcdefghijklmnoprstuvwxyzABCDEFGHIJKLMNOPRSTUVWXYZ0123456789";
		
		for ($i = 0; $i < $length; $i++) {
			$string .= substr($this->magicKeyLength, rand(0, $text_length), 1);
		}
		
		return $string;
	}
	
	
	
	
}



?>