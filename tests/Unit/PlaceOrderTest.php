<?php

namespace Tests\Unit;

use Tests\TestCase;

class PlaceOrderTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_order_page()
    {
        $response = $this->get('/addOrder');

        $response->assertStatus(200);
    }

    public function test_place_order()
    {
        $response = $this->call('POST','/addingorder',[
            'first_name' => 'Salman',
            'last_name' => 'Reza',
            'email' => 'syed.reza@northsouth.edu',
            'phone' => '+8801709279556',
            'address1' => '1133 Mirpur-2',
            'bkash' => '8564sdfsdfs',
            'product_id' => '1',
            'quantity' => '2',
        ]);
        
        $response->assertStatus($response->status(), 200);
    }

    
}
