<?php
/**
 * PDO Database connection Class
 * 
 * */
namespace Util\Database;

class PdoConnection {

	//properties
	const DB_NAME = 'shortme';
	const HOST 	  = 'localhost';
	const USER    = 'shortme';
	const PASS    = 'SSolorun2';

	protected $dbh = null;

	//$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
	
	function __construct() {

		// attempt a connection 
		try {
		    $this->dbh = new \PDO("mysql:host=".self::HOST.";dbname=".self::DB_NAME, self::USER, self::PASS);
		
		} catch (\PDOException $e) {
		    // return a connection error
		}

	}



	static function getHandle() {
		$db = new self;
		return $db->dbh;
	}

}// END CLASS



?>