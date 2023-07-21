<?php 
use Mezon\Router\Router;
$router = new Router();
session_start();

function getMethod(){
	return $_SERVER['REQUEST_METHOD'];
}//end function

if(URL_PATH == '/' || URL_PATH == '/index.php'){
	$controller      = 'SiteController.php';
	$classController = 'Site';
	$action          = 'index';
}else{
	$url             = explode("/", URL_PATH);
	$controller      = ucwords($url[1])."Controller.php";
	$classController = ucwords($url[1]);
}//end if

//Method (GET,POST, etc.)
$method = getMethod();
switch ($method) {
    case 'GET':
	        if(!empty($_GET)) {
				$action = explode("?", $url[2]);
				$action = $action[0];
			}else{
				$action = (!isset($url[2]) || empty($url[2])) ? 'index' : $url[2];
			}//end if
            break;
    case 'POST':
			$action = (!isset($url[2]) || empty($url[2])) ? 'index' : $url[2];
        break;
}//end switch
require_once('./controllers/'.$controller);
$router->fetchActions($mySite = new $classController);
$router->callRoute('/'.$action.'/',function(){});