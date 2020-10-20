<?php


namespace App\Services;


use App\Models\Calculation;
use Carbon\Carbon;

class Calculator implements CalculatorContract
{
    public $firstParameter, $secondParameter, $initTimestamp, $operator;

    public function __construct(int $firstParameter, int $secondParameter)
    {
        $this->firstParameter = $firstParameter;
        $this->secondParameter = $secondParameter;
        $this->initTimestamp = Carbon::now();
    }

    public function sum(): int
    {
        $this->operator = '+';
        $result = $this->firstParameter + $this->secondParameter;

        $this->register($result);

        return $result;
    }

    public function rest(): int
    {
        $this->operator = '-';
        $result = $this->firstParameter - $this->secondParameter;

        $this->register($result);

        return $result;
    }

    public function product(): float
    {
        $this->operator = '*';
        $result = $this->firstParameter * $this->secondParameter;

        $this->register($result);

        return $result;
    }

    public function division(): float
    {
        $this->operator = '/';
        $result = $this->firstParameter / $this->secondParameter;

        $this->register($result);

        return $result;
    }

    public function execute(): void
    {
        $this->sum();
        $this->rest();
        $this->product();
        $this->division();
    }

    protected function register(float $result): void
    {
        sleep(1);
        Calculation::create([
            'first_parameter' => $this->firstParameter,
            'second_parameter' => $this->secondParameter,
            'operator' => $this->operator,
            'result' => $result,
            'init_calculation' => $this->initTimestamp,
            'end_calculation' => Carbon::now(),
        ]);
    }
}
