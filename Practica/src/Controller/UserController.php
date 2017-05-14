<?php

namespace SilexApp\Controller;


use Exception;
use Silex\Application;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController
{
    public function getAction(Application $app, $id)
    {
        $sql = "SELECT * FROM user WHERE id = ?";
        $user = $app['db']->fetchAssoc($sql, array((int)$id));
        $response = new Response();
        if (!$user) {
            $response->setStatusCode(Response::HTTP_NOT_FOUND);
            $content = $app['twig']->render('error.twig', [
                    'message' => 'User not found'
                ]
            );
        } else {
            $response->setStatusCode(Response::HTTP_OK);
            $content = $app['twig']->render('user.twig', [
                    'user' => $user
                ]
            );
        }
        $response->setContent($content);
        return $response;
    }

    public function postAction(Application $app, Request $request)
    {
        $response = new Response();
        if ($request->isMethod('POST')) {
            // Validate
            $data['name'] = $request->get('name');   //$name
            $data['email'] = $request->get('email'); //$email
            $password = $request->get('password');
            $date = $request->get('birthdate');
            try {
                $app['db']->insert('user', [
                        'username' => $data['name'],
                        'email' => $data['email'],
                        'birthdate'=>$date,
                        'password'=>md5($password)

                    ]
                );

            } catch (Exception $e) {
                $response->setStatusCode(Response::HTTP_BAD_REQUEST);
                $content = $app['twig']->render('user.add.twig', [
                    'errors' => [
                        'unexpected' => 'An error has occurred, please try it again later'
                    ]
                ]);
                $response->setContent($content);
                return $response;
            }
        }
        $content = $app['twig']->render('user.add.twig');
        $response->setContent($content);
        return $response;
    }
}