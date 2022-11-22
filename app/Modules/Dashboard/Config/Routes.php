<?php

if (!isset($routes)) {
    $routes = \Config\Services::routes(true);
}


// $routes->group("dashboard", ["namespace" => "App\Modules\Dashboard\Controllers", 'filter' => 'IonAuth'], function ($routes) {
//     $routes->add("/", "Dashboard::index");
// });
$routes->add("/", "Dashboard::index", ['filter' => 'IonAuth']);

$routes->group("dashboard", ["namespace" => "App\Modules\Dashboard\Controllers", 'filter' => 'IonAuth'], function ($routes) {
    $routes->add("/", "Dashboard::index");
});
