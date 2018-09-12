<?php

namespace Tests\Feature;

use DemeterChain\Main;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\MainController;

class TestMainController extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testShowNumber()
    {
        $this->visit('/5')
             ->see('5');
        $this->visit('/asd')
             ->see('Invalid parameter set!');
    }
}
