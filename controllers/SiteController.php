<?php 

use Ahr\Framework\libs\Controller;
use Ahr\Models\User;

/**
 * Site controller
 */
class Site extends Controller{
	
	public function __construct(){
		parent::__construct();
	}//end function

	public function actionIndex(){
		$this->render('site/index');
	}//end function

	public function actionSignup(){
		$username = $this->post('username');
		$password = $this->post('password');

		if (!is_null($username) && !is_null($password)) {
			$user = new User($username,$password);
			$result = $user->save();
			echo "<pre>";
			var_dump($result);
			echo "</pre>";
			die();
			//$this->redirect('/site/login');
		}//end if
		
		$this->render('signup/form');
	}//end function
}