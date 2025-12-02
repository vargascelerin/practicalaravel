<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\OperationsController;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function test_status_code_is_200(): void
    {
        $statusCode = 200;
        $this->assertEquals(200, $statusCode);
    }

    public function testaddresult(): void{
        $controller = new OperationsController;
        $result = $controller->addition(5,10);
        $this->assertIsInt($result);
        $this->assertEquals(15,$result);
    }
}
