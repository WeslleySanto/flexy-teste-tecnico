<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VerificaRotasTest extends TestCase
{
    /**
     * testando a rota da Home.
     *
     * @return void
     */
    public function testRotaHome()
    {
        $response = $this->call('GET', '/');
    }

    /**
     * testando a rota transportadoras.
     *
     * @return void
     */
    public function testRotaTransportadoras()
    {
        $response = $this->call('GET', '/transportadoras');
    }
}
