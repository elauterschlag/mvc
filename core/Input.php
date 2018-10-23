<?php

class Input {
	
	public static function sanitize($input) {
		return htmlentities($input, ENT_QUOTES, "UTF-8");
	}
	
	public static function get($input) {
		if(isset($_POST[$input])) {
			return self::sanitize($_POST[$input]);
		}else{
			return self::sanitize($_GET[$input]);
		}
	}
}