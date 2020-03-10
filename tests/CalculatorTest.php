<?php
require 'src/Calculator.php';
use PHPUnit\Framework\TestCase;
class CalculatorTest extends TestCase{

    public function testAddtwoplusthree() {
        $calculator = new Calculator();
        $actual = $calculator->add(2, 3);
        $this->assertSame((float)5, $actual);
    }

    public function testAddtwoplusfour() {
        $calculator = new Calculator();
        $actual = $calculator->add(2, 4);
        $this->assertSame((float)6, $actual);
    }

    public function testAddDoubles() {
        $calculator = new Calculator();
        $actual = $calculator->add(2.2, 4.2);
        $this->assertSame(6.4, $actual);
    }

    public function testAddMinus() {
        $calculator = new Calculator();
        $actual = $calculator->add(-2, -6);
        $this->assertSame((float)-8, $actual);
    }

    public function testAddStrings() {
        $calculator = new Calculator();
        $this->expectException(TypeError::class);
        $actual = $calculator->add('a', 'b');
    }

    public function testAddZero() {
        $calculator = new Calculator();
        $actual = $calculator->add(0, 0);
        $this->assertSame((float)0, $actual);
    }
}