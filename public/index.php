<?php
session_start();

require_once __DIR__ . '/../vendor/autoload.php';
// require_once __DIR__ . '/../app/bootstrap.php';

require_once __DIR__ . '/../config.php';    
require_once CORE_PATH . '/Router.php';

$router = new Router();

//loads route
require_once ROUTE_PATH . '/web.php';
require_once ROUTE_PATH . '/api.php';

$router->run();