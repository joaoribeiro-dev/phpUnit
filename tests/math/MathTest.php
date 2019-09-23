<?php

namespace someApp\math;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase{
    private $object;
    protected function setUp():void {
        $this->object = new MathCalculator();
    }

    public function testFunction(){
        $this->assertTrue(1 == 1);
    }

    public function testDecimalToBinary(){
        $binary = $this->object->decimalToBinary(12);
        $this->assertTrue($binary == 1100);
    }

    /**
    * @dataProvider provideMockNumbers
    */
    public function testDecimalToBinaryWithData($number,$expected){
        $this->assertEquals($expected,$this->object->decimalToBinary($number));
    }

    public function provideMockNumbers():array
    {
        return[
            ["12","1100"],
            ["24","11000"],
            ["42","101010"],
            ["100","1100100"]
        ];
    }

}