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
		$engine = Config::get("database.engine"); 
		$host = Config::get("database.host"); 
		$port = Config::get("database.port");
		$database = Config::get("database.dbname"); 
		$user = Config::get("database.username"); 
		$pass = Config::get("database.password"); 
		$dsn =  $engine . ":host=" . $host . ";port=" 
			. $port . ";dbname=" . $database;
		parent::__construct($dsn, $user, $pass);
		echo "DB Construct! <br>";
	}
	public function __destruct() {
		echo "DB Destruct! <br>";
	}
	public function get() {
		$sql = "SELECT * FROM " . $this->_table_name;
		$stmt = $this->prepare($sql);
		$stmt->execute();
		$results = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $results;
	}
}
?>