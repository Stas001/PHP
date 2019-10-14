<?

use core\Router;

session_start();
require_once "application/lib/dev.php";
require_once "vendor/autoload.php";
define("ROOT",  __DIR__);


$router = new Router();
$router->run();
