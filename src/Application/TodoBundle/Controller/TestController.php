<?php

namespace Application\TodoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function homeAction()
    {
         return $this->render('ApplicationTodoBundle:Home:home.html.twig');
    }
    public function testSprint2()
    {
     	return $this->render('ApplicationTodoBundle:Home:home.html.twig');   
    }
}
