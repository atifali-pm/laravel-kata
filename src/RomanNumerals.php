<?php

namespace App;

class RomanNumerals
{
    const NUMERALS = [
        'MMMCMXCIX' => 3999,
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'VIX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    ];

    public function generate($number)
    {

        $result = '';

        foreach (static::NUMERALS as $numeral => $arabic) {
            while ($number >= $arabic) {
                $result .= $numeral;

                $number -= $arabic;
            }
        }


        return $result;

    }
}