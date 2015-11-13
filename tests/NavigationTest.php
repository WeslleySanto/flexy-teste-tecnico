<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NavigationTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testVisitaPaginaHome()
    {
        $this->visit('/')
             ->see(
                'Consulte a melhor opção de entrega'
            );
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testVisitaFormCreateTransportadoras()
    {
        $this->visit('/transportadoras')
             ->see(
                'Trasportadoras',
                'Nome Fantasia',
                'Razão Social',
                'CNPJ'
            );
    }

}
