<?php

namespace Application\TodoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Application\TodoBundle\Entity\Register;


class RegistrationController extends Controller
{
    public function registerAction(Request $request)
    {
        $firstname = $request->request->get('firstname');
        $lastname  = $request->request->get('lastname');
        $website   = $request->request->get('website');
        $username  = $request->request->get('username');
        $email     = $request->request->get('email');
        $password  = $request->request->get('password');
        
        $register = new Register();
        $register->setFirstname($firstname);
        $register->setLastname($lastname);
        $register->setWebsite($website);
        $register->setUsername($username);
        $register->setPassword($password);
        $register->setEmail($email);
        
        $query = $this->getDoctrine()->getManager();
        $query->persist($register);
        $query->flush();
        
        $this->get('session')->getFlashBag()->add('notice','User Registered successfully please login');
        
        return $this->redirect($this->generateUrl('application_todo_loginpage'));
        
        
    }
    
   
    
}
