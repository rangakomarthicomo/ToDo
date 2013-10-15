<?php

namespace Application\TodoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SymfonybookController extends Controller
{
    public function indexAction()
    {
        return $this->render('ApplicationTodoBundle:SymfonyBook:index.html.twig');
    }
}
