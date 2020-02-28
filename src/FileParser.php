<?php


namespace ReportsBuilder;


use Illuminate\Filesystem\Filesystem;

class FileParser
{

    /**
     * @var Filesystem
     */
    private $filesystem;


    function __construct(Filesystem $filesystem)
    {

        $this->filesystem = $filesystem;
    }


    function parseJson($file)
    {
        dd($this->filesystem->get(base_path($file)));
    }

}
