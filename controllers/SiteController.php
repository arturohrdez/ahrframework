<?php 

use Ahr\Framework\libs\Controller;
use Ahr\Framework\models\User;
/**
 * Site controller
 */
class Site extends Controller{
	
	public function __construct(){
		parent::__construct();
	}//end function

	public function actionIndex(){
		echo "entra site index";
		die();
	}//end function

	public function actionSignup(){
		$username = $this->post('username');
		$password = $this->post('password');

		if (!is_null($username) && !is_null($password)) {
			echo "<pre>";
			var_dump($username);
			echo "</pre>";
			echo "<pre>";
			var_dump($password);
			echo "</pre>";
			die();
			/*$user = new User($username,$password);
			$user->save();
			$this->redirect('/site/login');	*/
		}//end if
		
		$this->render('signup/form');
	}//end function
}