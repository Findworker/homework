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
        $controller  = new MainController();
        $received1 = $controller->showNumber('5')
                                  ->getData()["param"];
        $received2 = $controller->showNumber('asd')
                                  ->getData();

        $this->assertEquals(5, $received1);
        $this->assertEquals([], $received2);
    }
}
