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
                        'name' => $data['name'],
                        'email' => $data['email'],
                        'password'=>$password,
                        'birthdate'=>$date
                    ]
                );
                $lastInsertedId = $app['db']->fetchAssoc('SELECT id FROM user ORDER BY id DESC LIMIT 1');
                $id = $lastInsertedId['id'];
                $url = '/users/get/' . $id;
                $app['monolog']->info(sprintf("User with id '%d' and email '%s' registered.", $id, $data['email']));
                return new RedirectResponse($url);
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