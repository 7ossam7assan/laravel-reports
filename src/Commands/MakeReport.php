<?php

namespace MG\Commands;

use Illuminate\Console\Command;

class MakeReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:report {file=reports.json : Reports File}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Build/Export Laravel Report with one command';

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
        
    }
}
