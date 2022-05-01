<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Http\Controllers\AstrologieController;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AstrologieTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSigneChinois()
    {
        $date = "2002-10-11";
        
        $retour = AstrologieController::calChinois($date);

        $this->assertEquals("Cheval", $retour);
    }

    public function testSigneZodiaque()
    {
        $date = "2002-10-11";
        
        $retour = AstrologieController::calZodiaque($date);

        $this->assertEquals("Balance", $retour);
    }

}
