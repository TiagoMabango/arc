<?php
ob_start();

require __DIR__ . "/vendor/autoload.php";

/**
 * BOOTSTRAP
 */

use CoffeeCode\Router\Router;
use Source\Core\Session;

$session = new Session();
$route = new Router(url(), ":");
$route->namespace("Source\App");

/**
 * Admin ROUTES
 */

 $route->namespace("Source\App");
 $route->get("/","Admin:login");
 $route->get("/creat_cont","Admin:creat_cont");
 $route->get("/principal","Admin:principal");
 $route->get("/produtos","Admin:produtos");
 $route->get("/revendedores","Admin:revendedores");

 /**
  * ERROS ROUTES
  */

$route->namespace("Source\App")->group("/ops");
$route->get("/{errcode}","Admin:error");

/**
 * ROUTE
 */
$route->dispatch();

/**
 * ERROR REDIRECT
 */
if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();