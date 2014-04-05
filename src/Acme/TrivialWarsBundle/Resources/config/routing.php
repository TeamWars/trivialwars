<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('homepage', new Route('/trivial/', array(
    '_controller' => 'AcmeTrivialWarsBundle:Trivial:index',
)));

$collection->add('board', new Route('/trivial/game', array(
    '_controller' => 'AcmeTrivialWarsBundle:Trivial:tablero',
)));

return $collection;
