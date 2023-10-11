<?php

/* -------------------------------------------------------------------------- */
/*                                    Home                                    */
/* -------------------------------------------------------------------------- */
$router->get("/", [App\Controllers\HomeController::class, 'index']);

/* -------------------------------------------------------------------------- */
/*                              User credentials                              */
/* -------------------------------------------------------------------------- */
$router->get("/sign-up", [App\Controllers\SignUpController::class, 'index']);
$router->get("/sign-in", [App\Controllers\SignInController::class, 'index']);

/* -------------------------------------------------------------------------- */
/*                                  Products                                  */
/* -------------------------------------------------------------------------- */
$router->get("/products", [App\Controllers\ProductController::class, 'index']);
$router->get("/products/create", [App\Controllers\ProductController::class, 'create']);
$router->get("/products/edit", [App\Controllers\ProductController::class, 'edit']);

/* -------------------------------------------------------------------------- */
/*                                Product Types                               */
/* -------------------------------------------------------------------------- */
$router->get("/product-types", [App\Controllers\ProductTypeController::class, 'index']);
$router->get("/product-types/create", [App\Controllers\ProductTypeController::class, 'create']);
$router->get("/product-types/edit", [App\Controllers\ProductTypeController::class, 'edit']);
