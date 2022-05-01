<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PagesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHomePage(){
        $response = $this->get('/');
        $response->assertStatus(200);

    }

    public function testUtilisateurs(){
        $response = $this->get('/userList');
        $response->assertStatus(200);

    }

    public function testUser(){
        $response = $this->get('/user/45');
        $response->assertStatus(200);

    }
}
