<?php

use PHPUnit\Framework\TestCase;

require_once 'src/Calculator.php';

class CalculatorTest extends TestCase
{
    protected $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAdd()
    {
        $result = $this->calculator->add(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testSubtract()
    {
        $result = $this->calculator->subtract(5, 2);
        $this->assertEquals(3, $result);
    }
}
