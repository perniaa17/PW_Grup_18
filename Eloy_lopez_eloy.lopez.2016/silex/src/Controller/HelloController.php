<?php
namespace SilexApp\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function indexAction(Application $app, Request $request)
    {
       return $app['hello']('Eloy');
    }
    public function addAction(Application $app,$num1,$num2)
    {
        return "The result is :".$app['calc']->add($num1,$num2);
    }
}