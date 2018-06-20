<?php

namespace AvvisoSI\TrialMode\Console\Commands;

use Illuminate\Console\Command;

class RemoveTrial extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trial:remove';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove Trial Mode';

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
        @unlink($this->laravel->storagePath() . '/framework/trial');
        $this->info('Trial mode disabled');
    }
}
