<?php 
//Load .env file
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../config/');
$dotenv->load();

//Gets the base path for routing
$folderPath = dirname($_SERVER['SCRIPT_NAME']);
$urlPath    = $_SERVER['REQUEST_URI'];
$url        = substr($urlPath, strlen($folderPath));

define('URL_PATH', $url);
