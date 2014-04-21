<?php

namespace Acme\TrivialWarsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TrivialController extends Controller {

    public function indexAction() {
        return $this->render('AcmeTrivialWarsBundle:Trivial:index.html.php');
    }

    public function playerAction() {
        return $this->render('AcmeTrivialWarsBundle:Trivial:player.html.php');
    }

    public function tableroAction() {
        return $this->render('AcmeTrivialWarsBundle:Trivial/Tablero:tablero.html.php');
    }

    public function registerAction() {
        return $this->render('AcmeTrivialWarsBundle:Trivial:register.html.php');
    }

}
