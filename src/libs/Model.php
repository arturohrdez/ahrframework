<?php 
namespace Ahr\Framework\libs;

use Ahr\Framework\libs\Database;

/**
 * Base Model Class
 */
class Model{

	private Database $db;
	
	public function __construct(){
		$this->db = new Database();
	}//end function

	public function query($query){
		return $this->db->connect()->query($query);
	}//end function

	public function prepare($query){
		return $this->db->connect()->prepare($query);
	}//end function


}//end class