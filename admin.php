<?php
use \Ecommerce\PageAdmin;
use \Ecommerce\Model\User;



$app->get('/admin', function() {

	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("index");
	header("Location: /index.php/admin");
	exit;

});

$app->get('/admin/login', function() {

	$page = new PageAdmin([
		"header" => false,
		"footer" => false
	]);

	$page->setTpl("login");

});


$app->post('/admin/login', function(){
	
	User::login($_POST["login"], $_POST["password"]);
	
	header("Location: /index.php/admin");
	exit;

});

$app->get('/admin/logout', function(){
	User::logout();

	header("Location: /index.php/admin/login");
	exit;

});

?>