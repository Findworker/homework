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
        $resultData1 = $controller->showNumber('5')
                                  ->getData()["param"];
        $resultData1 = [];
        $resultData2 = $controller->showNumber('asd')
                                  ->getData();
        $resultData2 = 'asd';

        $this->assertEquals(5, $resultData1, "Received: $resultData1");
        $this->assertEquals([], $resultData2, "Expected: []");
    }
}
