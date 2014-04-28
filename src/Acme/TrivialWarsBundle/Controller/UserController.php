<?php

namespace Acme\TrivialWarsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller{
    
    public function playerAction(){
        
        return $this->render('AcmeTrivialWarsBundle:Trivial/User:user.html.php',array("content" => "player.html.php"));
    }

    
    
}
