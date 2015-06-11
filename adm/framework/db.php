<?php

class Database {

	private static $instance;
	private static $config;
	private static $database;
	private static $cont  = null;

	private function __construct() {
		require 'property.php';
		self::$config = parse_ini_file_extended();
	}

	public static function getInstance($database) {
		if(!self::$instance) {
			self::$instance = new self();
			self::$database = $database;
		}

		return self::$instance;
	}

	private static function connect() {
		if(self::$cont == null) {
			try {
				self::$cont =  new PDO("mysql:host=".self::$config['base']['host'].";dbname=".self::$database, self::$config['base']['user'], self::$config['base']['pass']); 
				self::$cont -> exec("SET CHARACTER SET utf8");
			} catch(PDOException $e) {
				die($e->getMessage()); 
			}
		}
		return self::$cont;
	}

	private static function disconnect() {
		self::$cont = null;
	}

	public static function selectWithParameter($query, $parameter) {
		if(!empty($query)) {
			$pdo = self::connect();
			$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$statement = $pdo -> prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$statement -> execute($parameter);
			self::disconnect();

			return $statement;
		}
	}

	public static function select($query) {
		if(!empty($query)) {
			$pdo = self::connect();
			$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$statement = $pdo -> prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$statement -> execute();
			self::disconnect();

			return $statement;
		}
	}

	public static function insertWithParameter($query, $parameter) {
		if(!empty($query)) {
			$pdo = self::connect();
			$statement = $pdo -> prepare($query);
			$statement -> execute($parameter);
			self::disconnect();
		}
	}

}
?>