<?php 
session_start();
require_once("vendor/autoload.php");

use \Ecommerce\Model\Category;
use \Slim\Slim;

$app = new Slim();

$app->config('debug', true);

Category::updateFile();

require_once("site.php");
require_once("admin.php");
require_once("admin-users.php");
require_once("admin-forgot.php");
require_once("admin-categories.php");
require_once("admin-products.php");

$app->run();

?>