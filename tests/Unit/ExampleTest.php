<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(false);
    }

    public function test_status_code_is_200(): void
    {
        $statusCode = 200;
        $this->assertEquals(200, $statusCode);
    }
}
