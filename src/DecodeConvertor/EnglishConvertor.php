<?php

namespace App\Converter;

require_once __DIR__ . '/DecodeMorzeInterface.php';

use App\DecodeConvertor\DecodeMorzeInterface;

class EnglishConverter implements DecodeMorzeInterface
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
        $words = explode('   ', $this->string);
        $decodeWords = array_map(function ($word) {
            if (array_key_exists($word, $this->map)) {
                return $this->map[$word];
            }

            $decodeWord = '';
            $simbols = explode(' ', $word);
            foreach ($simbols as $simbol) {
                $decodeWord .= $this->map[$simbol];
            }
            return $decodeWord;
        }, $words);

        return implode(' ', $decodeWords);
    }
}
