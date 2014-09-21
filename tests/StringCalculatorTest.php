<?php


class StringCalculatorTest extends PHPUnit_Framework_TestCase {

    private $sut;

    public function setUp() {
        $this->sut = new \StringCalculator();
    }

    /**
     * @test
     */
    public function shouldBeTrue() {
        $this->assertTrue(true);
    }
}