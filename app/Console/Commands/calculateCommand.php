<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use function App\Helpers\calculate;

class calculateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate {number}-{array*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        calculate($this->argument('number') , $this->argument('array'));
    }
}
