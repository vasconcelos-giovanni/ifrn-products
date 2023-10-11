<?php
/* -------------------------------------------------------------------------- */
/*                                 Autoloading                                */
/* -------------------------------------------------------------------------- */
require_once __DIR__ . '/../vendor/autoload.php';

/* -------------------------------------------------------------------------- */
/*                                Session Start                               */
/* -------------------------------------------------------------------------- */
session_start();

/* -------------------------------------------------------------------------- */
/*                                 DotEnv file                                */
/* -------------------------------------------------------------------------- */
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

/* -------------------------------------------------------------------------- */
/*                                  Constants                                 */
/* -------------------------------------------------------------------------- */
define('ROUTES_PATH', __DIR__ . '/../routes');
define('VIEW_PATH', __DIR__ . '/../views');

/* -------------------------------------------------------------------------- */
/*                                   Imports                                  */
/* -------------------------------------------------------------------------- */
use App\Router;
use App\Config;

/* -------------------------------------------------------------------------- */
/*                                   Routing                                  */
/* -------------------------------------------------------------------------- */
$router = new Router();
require_once ROUTES_PATH . '/web.php';

/* -------------------------------------------------------------------------- */
/*                             App initialization                             */
/* -------------------------------------------------------------------------- */
(new App\App(
    $router,
    [
        'method' => $_SERVER['REQUEST_METHOD'],
        'uri' => $_SERVER['REQUEST_URI']
    ],
    new Config($_ENV)
))->up();

// $x = include VIEW_PATH . '/index.php';
// echo $x;