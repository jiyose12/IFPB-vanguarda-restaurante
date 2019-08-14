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



    public function lista (){
        $response=$this->json('GET','/api/itens');
        $response->assertStatus(200);
        $response->assertJsonStructure(
            [
                'nome',
                'categoria',
                'preco_bruto',
                'preco_liquido',
                'desconto',
                'quantidade',
                'img_itens',

            ]
            );


    }


}
