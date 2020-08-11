<?php

namespace App;

require_once __DIR__ . '/DecodeConvertor/EnglishConvertor.php';
require_once __DIR__ . '/DecodeConvertor/DecodeMorzeInterface.php';

use App\DecodeConverter\EnglishConverter;
use App\DecodeConvertor\DecodeMorzeInterface;;

class DecodeMorze
{
    private $convertor;

    public function __construct(DecodeMorzeInterface $convertor)
    {
        $this->convertor = $convertor;
    }

    public function getText()
    {
        return $this->convertor->convert();
    }
}

$string = '−−−−− •−−−− ••−−− •••••   •••• • •−•• •−•• −−−   •−− −−− •−• •−•• −••   •••−−−•••';
$convertor = new EnglishConverter($string);
$a = new DecodeMorze($convertor);
var_dump($a->getText());
