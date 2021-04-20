<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'addUniqueProductToCart' => [['id'], ['_controller' => 'App\\Controller\\CartController::addUniqueProductToCart'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/cart']], [], []],
    'RemoveUniqueProductToCart' => [['id'], ['_controller' => 'App\\Controller\\CartController::RemoveUniqueProductToCart'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/cart']], [], []],
    'GetCart' => [[], ['_controller' => 'App\\Controller\\CartController::GetCart'], [], [['text', '/api/cart/']], [], []],
    'ActivateCart' => [[], ['_controller' => 'App\\Controller\\CartController::ActivateCart'], [], [['text', '/api/cart/validate/']], [], []],
    'getOrders' => [[], ['_controller' => 'App\\Controller\\CartController::getOrders'], [], [['text', '/api/orders/']], [], []],
    'getOrder' => [['id'], ['_controller' => 'App\\Controller\\CartController::getOrder'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/orders']], [], []],
    'listProduct' => [[], ['_controller' => 'App\\Controller\\CatalogueController::listProduct'], [], [['text', '/api/product/']], [], []],
    'uniqueProduct' => [['id'], ['_controller' => 'App\\Controller\\CatalogueController::uniqueProduct'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/product']], [], []],
    'removeUniqueProduct' => [['id'], ['_controller' => 'App\\Controller\\CatalogueController::removeUniqueProduct'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product']], [], []],
    'addUniqueProduct' => [[], ['_controller' => 'App\\Controller\\CatalogueController::addUniqueProduct'], [], [['text', '/admin/product/']], [], []],
    'updateUniqueProduct' => [['id'], ['_controller' => 'App\\Controller\\CatalogueController::updateUniqueProduct'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/product']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\UserController::register'], [], [['text', '/api/register']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\UserController::login'], [], [['text', '/api/login']], [], []],
    'userUpdate' => [[], ['_controller' => 'App\\Controller\\UserController::userUpdate'], [], [['text', '/api/user']], [], []],
    'userDelete' => [[], ['_controller' => 'App\\Controller\\UserController::userDelete'], [], [['text', '/api/user']], [], []],
    'displayUser' => [[], ['_controller' => 'App\\Controller\\UserController::displayUser'], [], [['text', '/api/user']], [], []],
];