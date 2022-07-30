<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IndexTest extends TestCase
{
    public function test_if_buydirect_redirects_to_cart()
    {
        $response = $this->get('/buy-direct/1');
        $response->assertRedirect('/cart');
    }
    
    public function test_if_contact_page_load()
    {
        $response = $this->get('/contato');
        $response->assertStatus(200);
    }
    
    public function test_if_home_page_list_products()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function test_if_function_add_to_cart_redirect_to_home_works()
    {
        $response = $this->get('/add-to-cart/5');
        $response->assertRedirect('/');
    }

}
