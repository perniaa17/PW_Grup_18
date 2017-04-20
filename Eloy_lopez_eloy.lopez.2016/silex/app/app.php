<?php
use Silex\Application;
use SilexApp\Model\Services\Calculator;
$app =new Application();
$app['app.name']='SilexApp';
$app['calc']=function (){
    return new Calculator();
};

return $app;
