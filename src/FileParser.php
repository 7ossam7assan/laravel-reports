<?php


namespace MG;


use Illuminate\Filesystem\Filesystem;
use MG\Formatters\IFileFormatter;
use Psy\Util\Str;

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


    function parse($file, IFileFormatter $fileFormatter)
    {
        list($extenstion, $content) = $this->getFileDetails($file);
        // validate file extension
        if (in_array($extenstion,config('report-builder.format')))
        {
            return $fileFormatter->format($content);
        } else{
             throw new ExtensionFileException;
        }

    }

    function getFileDetails($file)
    {
        $extenstion = $this->filesystem->extension(base_path($file));
        $content = $this->filesystem->get(base_path($file));

        return[$extenstion, $content];
    }


}
