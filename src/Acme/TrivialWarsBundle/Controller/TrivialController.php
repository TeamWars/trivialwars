<?php

namespace Acme\TrivialWarsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TrivialController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeTrivialWarsBundle:Trivial/pruebas:index.html.php');
//        return $this->render('AcmeTrivialWarsBundle:Trivial:index.html.php');
    }
    
    public function tableroAction(){
        return $this->render('AcmeTrivialWarsBundle:Trivial/Tablero:tablero.html.php');
    }
}
