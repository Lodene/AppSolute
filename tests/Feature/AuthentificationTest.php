<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthentificationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testDatabase(){

        $this->assertDatabaseMissing('users',  [
            'name' => 'MONPSEUDOESTLA'
        ]);   
    }
}
