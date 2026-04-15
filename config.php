<?php 

//
// ROUTE FOLDER LOCAL
//

// root project di atas public 
define('BASE_PATH', __DIR__);

// forlder utama /LUSTAV2
define('APP_PATH', BASE_PATH . '/app');

// child /app
define('CONFIG_PATH', APP_PATH . '/Config');
define('CORE_PATH', APP_PATH . '/Core');
define('MODEL_PATH', APP_PATH . '/Models');
define('CONTROLLER_PATH', APP_PATH . '/Controllers');

// folder /public 
define('PUBLIC_PATH', BASE_PATH . '/public');
define('VIEWS_PATH', BASE_PATH . '/views');
define('ROUTE_PATH', BASE_PATH . '/routes');


//
// ROUTE URL
//

define('BASE_URL', 'http://lustav2.test');
define('PUBLIC_URL', BASE_URL);

//
// DATABASE
//

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'lusta');
define('DB_CHARSET', 'utf8mb4');
