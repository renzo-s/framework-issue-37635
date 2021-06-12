<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\PhoneNumber;

class TriggerError extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trigger-error';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'framework issue 37635';

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
        $number = PhoneNumber::find(1);
        $number->customers()->touch();

        // $this->info('This is a info line');
        // $this->warn('This is a warn line');
        // $this->comment('This is a comment line');
        // $this->alert('This is a alert line');
        // $this->error('This is a error line');

        return 0;
    }
}
