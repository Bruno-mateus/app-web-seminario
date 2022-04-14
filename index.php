<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \rocknation\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    //add header
	$page = new Page();
	//template body
	$page -> setTpl("index");
	//after setTpl call footer
});

$app->run();

 ?>