<?php

namespace App\EncodeConvertor;

require_once __DIR__ . '/EncodeMorzeInterface.php';

use App\EncodeConvertor\EncodeMorzeInterface;

class EnglishConverter implements EncodeMorzeInterface
{
    private $string;
    private $map = [
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
        '•••−−−•••' => 'sos'
    
    ];

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function convert()
    {
        $words = explode(' ', $this->string);

        $encodeWords = array_map(function ($word) {
            $lowerWord = strtolower($word);
            if (array_key_exists(strtolower($lowerWord), array_flip($this->map))) {
                return array_flip($this->map)[$lowerWord];
            }
            $simbols = str_split($lowerWord);
            $encodeWord = '';
            foreach ($simbols as $simbol) {
                $encodeWord .=  ' ' . array_flip($this->map)[$simbol];
            }

            return trim($encodeWord);
        }, $words);

        return implode('   ', $encodeWords);
    }
}
