<?php

namespace App;

require_once __DIR__ . '/EncodeConvertor/EncodeMorzeInterface.php';

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
