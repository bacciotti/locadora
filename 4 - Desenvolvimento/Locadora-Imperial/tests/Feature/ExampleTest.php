<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /* [Diego - 03/12/2018] - Classe verifica requisicao da rota /admin, irá retornar um erro pois não existe está rota. */
    public function testBasicTest2()
    {
        $response = $this->get('/admin');

        $response->assertStatus(200);
    }
}
