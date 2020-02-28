<?php


namespace MG\Formatters;


class JsonFormatter implements IFileFormatter
{
    function format($content)
    {
        return json_decode($content,null);
    }

}
