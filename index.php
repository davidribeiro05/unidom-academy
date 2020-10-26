<?php

ob_start();

require __DIR__ . "/vendor/autoload.php";

use Source\Core\Session;
use CoffeeCode\Router\Router;

//$session = new Session();
$route = new Router(url(), ":");
$route->namespace("Source\App");

/**
 * SITE ROUTES
 */
$route->group(null);
$route->get("/", "Site:home");

/**
 * SYSTEM ROUTES
 */
$route->group("sistema");
$route->get("/bem-vindo", "Site:welcome");
$route->get("/perfil", "Site:profile");
$route->get("/cadastro", "Site:register");
$route->get("/alunos", "Site:student");

$route->post("/cadastro", "Site:register");


$route->dispatch();

ob_end_flush();