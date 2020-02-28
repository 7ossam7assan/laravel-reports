<?php


namespace MG\Formatters;


class YamlFormatter implements IFileFormatter
{
    function format($content)
    {
        return Yaml::parse($content);
    }

}
