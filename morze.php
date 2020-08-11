<?php

function decodeMorze($morze)
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
    
    ];
    $readyString = trim($morze);
    $words = explode('   ', $readyString);
    $decodeWords = array_map(function ($word) use ($map) {
        $simbols = explode(' ', $word);
        $decodeSimbols = '';
        foreach ($simbols as $simbol) {
            if (!array_key_exists($simbol, $map)) {
                continue;
            }
            $decodeSimbols .= $map[$simbol];
        }

        return $decodeSimbols;
    }, $words);

    return implode(' ', $decodeWords);
}

$morze = '      •••• • •−•• •−•• −−−   •−− −−− •−• •−•• −••';


var_dump(decodeMorze($morze));