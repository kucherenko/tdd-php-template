<?php


class StringCalculatorTest extends PHPUnit_Framework_TestCase {

    private $_sut;

    public function setUp() {
        $this->_sut = new \StringCalculator();
    }

    /**
     * @test
     */
    public function shouldBeTrue() {
        $this->assertTrue(false);
    }
}