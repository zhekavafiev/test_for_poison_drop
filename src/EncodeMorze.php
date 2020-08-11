<?php

namespace App;

require_once __DIR__ . '/EncodeConvertor/EnglishConvertor.php';
require_once __DIR__ . '/EncodeConvertor/EncodeMorzeInterface.php';


use App\EncodeConvertor\EnglishConverter;
use App\EncodeConvertor\EncodeMorzeInterface;


class EncodeMorze
{
    private $convertor;

    public function __construct(EncodeMorzeInterface $convertor)
    {
        $this->convertor = $convertor;
    }

    public function getMorze()
    {
        return $this->convertor->convert();
    }
}

$str = '0125 hello world sos';
$convertor = new EnglishConverter($str);

$a = new EncodeMorze($convertor);
var_dump($a->getMorze());
