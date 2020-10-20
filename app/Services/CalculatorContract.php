<?php


namespace App\Services;


interface CalculatorContract
{
    public function __construct(int $firstParameter, int $secondParameter);
    public function sum(): int;
    public function rest(): int;
    public function product(): float;
    public function division(): float;
}
