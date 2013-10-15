<?php

namespace Application\TodoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    public function loginAction()
    {
        return $this->render('ApplicationTodoBundle:Login:login.html.twig');
    }
    
    public function logincheckAction(Request $request)
    {
        $username = $request->request->get('username');
        $password = $request->request->get('password');
       
        
        $query = $this->getDoctrine()->getManager();
        
        $user = $query->getRepository("ApplicationTodoBundle:Register")->findBy(array('username' => $username,'password' => $password));
        
        if(!$user)
        {
             $this->get('session')->getFlashBag()->add('notice2','The credentials are wrong');
        
             return $this->render('ApplicationTodoBundle:Login:login.html.twig');
        }
        else 
        {
            $session = $this->getRequest()->getSession();
            
            $session->set('username', $username);
            
            return $this->redirect($this->generateUrl('application_todo_homepage'));
            
        }
    }
    
    public function logoutAction()
    {
        $session = $this->getRequest()->getSession();
        
        $session->remove('username');
        
        $this->get('session')->getFlashBag()->add('notice2','you logout successfully');
        
        return $this->render('ApplicationTodoBundle:Login:login.html.twig');
    }
    
}
