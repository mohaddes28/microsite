<?php

namespace App\Helpers;

class NumberToWord
{
    public static function convertBigWord($number): string
    {
        $result = $number / 1000000;
        if($result > 1){
            $number_format = number_format($result, 1);
            return "{$number_format}M";
        }

        $result = $number / 1000;
        if($result > 1){
            $number_format = number_format($result, 1);
            return "{$number_format}K";
        }

        return "$number";
    }
}
