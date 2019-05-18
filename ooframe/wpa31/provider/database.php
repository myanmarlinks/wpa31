<?php 

class DB extends PDO {
	private static $_instance; 
	private $_table_name;

	public static function table($table_name) {
		if(!self::$_instance instanceof DB) {
			self::$_instance = new DB();
		}
		self::$_instance->_table_name = $table_name;
		return self::$_instance;
	}
	public function __construct() {
		$engine = "mysql"; 
		$host = "localhost"; 
		$port = "3306";
		$database = "wpa31"; 
		$user = "root"; 
		$pass = ""; 
		$dns =  $engine . ":host=" . $host . ";port=" 
			. $port . ";dbname=" . $database;
		parent::__construct($dns, $user, $pass);
		echo "DB Construct! <br>";
	}
	public function __destruct() {
		echo "DB Destruct! <br>";
	}
	public function get() {
		$sql = "SELECT * FROM " . $this->_table_name;
		echo $sql;














	}
}

?>