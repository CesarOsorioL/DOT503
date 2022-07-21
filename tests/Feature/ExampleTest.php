<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');        
        $response->assertStatus(200);
        
    }

    public function test_the_application_returns_a_error_response()
    {
        $response = $this->get('/home');        
        $response->assertStatus(404);

        $response = $this->get('/account');        
        $response->assertStatus(404);

       
    }
}
