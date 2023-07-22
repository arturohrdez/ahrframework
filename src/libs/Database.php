<?php
namespace Ahr\Framework\libs;

/**
 * Blase Database Class
 */
use PDO;
use PDOException;

class Database{
	private string $host;
	private string $db;
	private string $user;
	private string $pass;
	private string $charset;

	public function __construct(){
		$this->host    = $_ENV["HOST"];
		$this->db      = $_ENV["DB"];
		$this->user    = $_ENV["USER"];
		$this->pass    = $_ENV["PASS"];
		$this->charset = $_ENV["CHARSET"];
	}//end function

	public function connect():PDO{
		try {
			$conn = "mysql:host=".$this->host.";";
			$conn .= "dbname=".$this->db.";";
			$conn .= "charset=".$this->charset.";";

			$options = [
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_EMULATE_PREPARES => false
			];

			$pdo = new PDO($conn,$this->user,$this->pass,$options);
			return $pdo;
		} catch (PDOException $e) {
			throw $e;
		}
	}//end function
}//end class