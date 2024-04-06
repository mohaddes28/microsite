<?php

namespace App\Http\Helpers;

class Helpers
{
    public static function getAvatar($str): string
    {
        $acronym = '';
        $word = '';
        $words = preg_split("/(\s|\-|\.)/", $str);
        foreach($words as $w) {
            $acronym .= substr($w,0,1);
        }
        $word = $word . $acronym ;
        return $word;
    }
}
