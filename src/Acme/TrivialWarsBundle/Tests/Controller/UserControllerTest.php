<?php

namespace Acme\TrivialWarsBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testPlayer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/player');
    }

}
