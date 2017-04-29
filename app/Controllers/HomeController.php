<?php

namespace App\Controllers;

use Slim\Views\Twig as View;

class HomeController extends Controller
{

 public function index($request, $response)
 {

     $data = $this->db->table('users')->find(1);
     var_dump($data->name);
     die();


     return $this->view->render($response, 'home.twig');
 }
}