<?php

namespace someApp\math;

class MathCalculator{
    public function getFiboNumber(){

    }
    public function decimalToBinary($decimal){
        $bin = '';
        do {
            $bin .= ($decimal %2 == 0) ? '0' : '1';
            $decimal = floor($decimal/2);
        } while ($decimal >= 1);

        return strrev($bin);
    }

    public function getNFiboNumber($n){
        if($n < 1){
            return $n;
        }
        if(array_key_exists($n,$this->memozation)){
            return $this->memozation[$n];
        }

        $this->memozation[$n] - $this->getNFiboNumber($n - 1) + $this->getNFiboNumber($n - 2);
        return $this->memozation[$n];

    }
}