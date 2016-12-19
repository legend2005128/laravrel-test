<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class test2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test2';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        //
        $name = $this->choice('What is your name?', ['Taylor', 'Dayle'], false);
        $this->error('Something went wrong!');
        if ($this->confirm('Do you wish to continue? [y|N]')) {
            $this->info('Display this on the screen');
        }else{
            $this->info(' N');
        }

    }
}
