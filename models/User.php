<?php 
namespace Ahr\Models;

use Ahr\Framework\libs\Model;
use PDO;
use PDOException;

/**
 * 
 */
class User extends Model{
	private int $id;
	private array $posts;

	public function __construct(private string $username, private string $password){
		parent::__construct(); 
		$this->posts  = [];
	}//end function

	public function save(){
		try {
			$hash = self::getHashedPassword($this->password);
			$query = $this->prepare('INSERT INTO users(username,password,status) VALUES (:username,:password,:status)');
			$query->execute([
				'username' => $this->username,
				'password' => $this->password,
				'status'   => 'active',
			]);
			return true;
		} catch (PDOException $e) {
			die($e->getMessage());
			//return false;
		}//end try
	}//end function

	private static function getHashedPassword($password){
		return password_hash($password, PASSWORD_DEFAULT,['cost'=>10]);
	}//end function
}//end class