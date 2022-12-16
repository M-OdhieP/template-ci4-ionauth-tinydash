<?php

if (!isset($routes)) {
    $routes = \Config\Services::routes(true);
}


// $routes->group("dashboard", ["namespace" => "App\Modules\Dashboard\Controllers", 'filter' => 'IonAuth'], function ($routes) {
//     $routes->add("/", "Dashboard::index");
// });
$routes->add("/", "Dashboard::index", ['filter' => 'IonAuth']);
$routes->add("blank", "Dashboard::blank", ['filter' => 'IonAuth']);


// example crud ajax 
$routes->add("example_index_crud", "ExampleController::index", ['filter' => 'IonAuth']);
$routes->add("example_get_all_data", "ExampleController::get_all_data", ['filter' => 'IonAuth']);
$routes->add("example_get_one/(:num)", "ExampleController::get_one/$1", ['filter' => 'IonAuth']);

$routes->post("example_update", "ExampleController::update", ['filter' => 'IonAuth']);
$routes->post("example_create", "ExampleController::create", ['filter' => 'IonAuth']);
$routes->delete("example_delete/(:any)", "ExampleController::delete/$1", ['filter' => 'IonAuth']);



$routes->group("dashboard", ["namespace" => "App\Modules\Dashboard\Controllers", 'filter' => 'IonAuth'], function ($routes) {
    $routes->add("/", "Dashboard::index");
    $routes->add("setting", "Setting::index");
    $routes->post("setting/update", "Setting::update");
});
