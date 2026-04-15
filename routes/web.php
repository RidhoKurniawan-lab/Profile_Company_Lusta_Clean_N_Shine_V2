<?php

// User
$router->get('/', ['web/UserController', 'index']);

$router->get('/product', ['web/UserController', 'product']);

$router->get('/about', ['web/UserController', 'about']);

$router->get('/contact', ['web/UserController', 'contact']);

$router->get('product/detail', ['web/UserController', 'detail']);

// Auth
$router->get('/login', ['web/AuthController', 'index']);

// Admin
$router->get('/admin', ['web/AdminController', 'index']);

$router->get('/admin/product', ['web/AdminController', 'product']);

$router->get('/admin/add_product', ['web/AdminController', 'addProduct']);

$router->get('/admin/edit_product', ['web/AdminController', 'editProduct']);

$router->get('/admin/link_product', ['web/AdminController', 'linkProduct']);

$router->get('/admin/product/export_pdf', ['api/AdminApiController', 'exportProductPdf']);