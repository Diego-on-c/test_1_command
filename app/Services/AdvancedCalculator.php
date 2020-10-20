<?php


namespace App\Services;


class AdvancedCalculator extends Calculator
{

    public function equation(): float
    {
        $this->operator = 'equation';
        //se simula la ecuación
        $result = $this->rand_float(0,2,10);

        $this->register($result);

        return $result;
    }

    public function execute(): void
    {
        parent::execute();
        echo $this->equation();
    }

    private function rand_float($st_num=0,$end_num=1,$mul=1000000)
    {
        if ($st_num>$end_num) return false;
        return mt_rand($st_num*$mul,$end_num*$mul)/$mul;
    }
}
