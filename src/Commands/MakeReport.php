<?php

namespace MG\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use MG\FileParser;


class MakeReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:report {file=reports.json : Reports JSON File}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Build/Export Laravel Report with just one command';


    /**
     * @var FileParser
     */

    private $file_parser;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(FileParser $parser)
    {
        parent::__construct();
        $this->file_parser = $parser;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $file = $this->argument('file');
        $extenstion = $this->file_parser->getFileDetails($file)[0];
        $class = 'MG\\Formatters\\'.Str::studly($extenstion.'Formatter');
        dd($this->file_parser->parse($file,new $class));
        dd($file);
    }
}
