<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeJobs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:make-jobs';

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

        foreach (range(1, 50) as $i) {
            dispatch(new \App\Jobs\FailJob());
        }

        foreach (range(1, 10) as $i) {
            dispatch(new \App\Jobs\SucessJob());
        }
    }
}
