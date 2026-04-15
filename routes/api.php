<?php

$router->post('/api/login', ['api/AuthApiController', 'login']);

$router->post('/api/logout', ['api/AuthApiController', 'logout']);

$router->get('/api/session/get', ['api/AdminApiController', 'getUser']);

$router->get('/api/category/get', ['api/AdminApiController', 'getCategory']);

$router->post('/api/product/insert', ['api/AdminApiController', 'createProduct']);

$router->get('/api/product/get', ['api/AdminApiController', 'getProduct']);

$router->get('/api/product/getById', ['api/AdminApiController', 'getProductById']);

$router->post('/api/product/update', ['api/AdminApiController', 'updateProduct']);

$router->post('/api/product/delete', ['api/AdminApiController', 'deleteProduct']);

$router->post('/api/product_link/update', ['api/AdminApiController', 'updateProductLinks']);

$router->get('/api/product_link/getById', ['api/AdminApiController', 'getProductLinkById']);

$router->get('/api/summary', ['api/AdminApiController', 'getDataDashboard']);

$router->get('/api/product/getByStatus', ['web/UserController', 'getAllByStatus']);

$router->get('/api/product/detail', ['web/UserController', 'getById']);