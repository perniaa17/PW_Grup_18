<?php

$app->get('/hello/{name}','SilexApp\\Controller\\HelloController::indexAction');
$app->get('/add/{num1}/{num2}','SilexApp\\Controller\\HelloController::addAction');
