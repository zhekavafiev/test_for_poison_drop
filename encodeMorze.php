<?php

namespace App;

function encodeMorze($string)
{
    $map = [
        '•−' => 'a',
        '−•••' => 'b',
        '−•−•' => 'c',
        '−••' => 'd',
        '•' => 'e',
        '••−•' => 'f',
        '−−•' => 'g',
        '••••' => 'h',
        '••' => 'i',
        '•−−−' => 'j',
        '−•−' => 'k',
        '•−••' => 'l',
        '−−' => 'm',
        '−•' => 'n',
        '−−−' => 'o',
        '•−−•' => 'p',
        '−−•−' => 'q',
        '•−•' => 'r',
        '•••' => 's',
        '−' => 't',
        '••−' => 'u',
        '•••−' => 'v',
        '•−−' => 'w',
        '−••−' => 'x',
        '−•−−' => 'y',
        '−−••' => 'z',
        '•−−−−' => 1,
        '••−−−' => 2,
        '•••−−' => 3,
        '••••−' => 4,
        '•••••' => 5,
        '−••••' => 6,
        '−−•••' => 7,
        '−−−••' => 8,
        '−−−−•' => 9,
        '−−−−−' => 0,
        '•••−−−•••' => 'SOS'
    
    ];
    $readyString = trim($string);
    $words = explode(' ', $readyString);
    $encodeWords = array_map(function ($word) use ($map) {
        $lowerWorld = strtolower($word);
        $simbols = str_split($lowerWorld);
        $encodeSimbols = '';
        foreach ($simbols as $simbol) {
            if (in_array($simbol, $map)) {
                $morzeSimbol = array_search($simbol, $map);
                $encodeSimbols .= "{$morzeSimbol} ";
            }
        }
        return trim($encodeSimbols);
    }, $words);

    return implode('   ', $encodeWords);
}

$string = '0125 Hello world SOS    ';
var_dump(encodeMorze($string));
