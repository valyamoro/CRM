<?php
declare(strict_types=1);
\error_reporting(-1);
\session_start();

$url = \trim($_SERVER['REQUEST_URI'], '/');

$routes = require __DIR__ . '/config/routes.php';

$currentAction = [];
foreach ($routes as $pattern => $value) {
    if (\preg_match($pattern, $url)) {
        $currentAction = $value;
        break;
    }
}

require __DIR__ . '/src/models/base_model.php';

$dbh = connectionDB();

require __DIR__ . "/src/models/{$currentAction['model']}_model.php";

require __DIR__ . '/src/controllers/base_controller.php';
require __DIR__ . "/src/controllers/{$currentAction['controller']}_controller.php";
require __DIR__ . '/view/layouts/default.php';
