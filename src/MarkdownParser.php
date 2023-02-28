<?php

namespace Mazharul\Dummypackage;

class MarkdownParser
{

    public static function parse($string)
    {
        return \Parsedown::instance()->text($string);
    }
}