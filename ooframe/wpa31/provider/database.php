<?php 

class DB extends PDO {
	private static $_instance; 
	private $_table_name;
	private $_isWhere = false;
	private $_whereString = "";
	private $_whereValue = [];

	public static function table($table_name) {
		if(!self::$_instance instanceof DB) {
			self::$_instance = new DB();
		}
		self::$_instance->_table_name = $table_name;
		self::$_instance->_isWhere = false;
		self::$_instance->_whereString = "";
		self::$_instance->_whereValue = [];
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

	public function where($where_value) {
		$this->_isWhere = true;
		$where_keys = array_keys($where_value);
		$where_string = " WHERE ";
		foreach ($where_keys as $key) {
			$where_string .= $key . "= :" . $key . " AND "; 
		}
		$this->_whereString = substr($where_string, 0, -4);
		$this->_whereValue = $where_value;
		return $this;

	}
	public function get() {
		if($this->_isWhere) {
			$sql = "SELECT * FROM students" . $this->_whereString;
		} else {
			$sql = "SELECT * FROM " . $this->_table_name;
		}
		$stmt = $this->prepare($sql);
		$stmt->execute($this->_whereValue);
		$results = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $results;
	}
}
?>