<?php
namespace SilexApp\Controller;


use Silex\Application;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function home(Application $app){
        $response = new Response();
        $response->setStatusCode(Response::HTTP_OK);
        $content = $app['twig']->render('home.twig');
        $response->setContent($content);
        return $response;
    }

    public function signIn(Application $app){
        $response = new Response();
        $response->setStatusCode(Response::HTTP_OK);
        $content = $app['twig']->render('sign-in.twig');
        $response->setContent($content);
        return $response;
    }
}
