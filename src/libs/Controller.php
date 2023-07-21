<?php 
/**
 * Base Controller Class
 */
namespace Ahr\Framework\libs;

use Ahr\Framework\libs\View;

class Controller {
	private View $view;

	public function __construct(){
		$this->view  =  new View();
	}//end function

	protected function render(string $name,array $attributes = []){
		$this->view->render($name,$attributes);
	}//end function

	protected function redirect( $url){
		header( 'Location: ' . $url );
	}//end function

	protected function post(string $param){
		if(!isset($_POST[$param])){
			return null;
		}

		return $_POST[$param];
	}//end function

	protected function get(string $param){
		if(!isset($_GET[$param])){
			return null;
		}

		return $_GET[$param];
	}//end function
}