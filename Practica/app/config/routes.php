<?php
$app->get('/hello/{name}', 'SilexApp\Controller\HelloController::indexAction');

// USER
$app->get('/users/get/{id}', 'SilexApp\Controller\UserController::getAction');
$app->match('/users/add', 'SilexApp\Controller\UserController::postAction');
$app->get('/', 'SilexApp\Controller\BaseController::indexAction');
$app->get('/admin','SilexApp\Controller\BaseController::adminAction');
