<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewProductPageTest extends TestCase
{
    use RefreshDatabase;
    public function view_products()
    {
        $response = $this->get('/products');
        $response->assertStatus(200);
    }

    public function create_product(){
        $response = $this->call('POST', '/addProduct', [
            'name' => 'Iphone',
            'description' => '13 pro max',
            'quantity' => 5,
            'price' => 1000,
            'status' => 'Active',
            'cat_id' => 1
        ]);

        $response->assertStatus(200);
        $response->assertSee('Product created');
    }
}
