<?php

namespace Tests\Unit;

use App\Http\Controllers\OperationsController;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     **/
    /*
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function testSuma(): void
    {
        $this->assertEquals(1, 2);
    }
    */

    public function testIsBoolean()
    {
        $prueba = new OperationsController();

        $this->assertTrue($prueba->isBoolean(true));
        $this->assertFalse($prueba->isBoolean("true"));
    }

    public function testSum()
    {
        $prueba = new OperationsController();

        $this->assertSame(5, $prueba->sum(2, 3));
        $this->assertNotSame(5, $prueba->sum(2, 4));
    }

    public function testEquals()
    {
        $prueba = new OperationsController();

        $this->assertEquals(1, $prueba->equals(1, 1));
        $this->assertNotEquals(1, $prueba->equals(1, 2));
    }

    public function testContainsValue()
    {
        $prueba = new OperationsController();

        $this->assertContains(2, [1,2,3]);
        $this->assertNotContains("niños", ["niño", "niña"]);
    }

    public function testIsString()
    {
        $prueba = new OperationsController();

        $this->assertIsString("foo");
        $this->assertIsNotString(1);
    }
}
