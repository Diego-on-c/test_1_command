<?php

namespace App\Console\Commands;

use App\Services\AdvancedCalculator;
use Illuminate\Console\Command;

class Calculate extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:calculate {firstParameter} {secondParameter}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command calculate getting the parameters.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $parameters = $this->arguments();
        $calculator = new AdvancedCalculator(intval($parameters['firstParameter']),
            intval($parameters['secondParameter']));

        $calculator->execute();

        return null;
    }
}
