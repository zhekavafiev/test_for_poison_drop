<?php

namespace App\EncodeConvertor;

interface EncodeMorzeInterface
{
    public function __construct($string);
    public function convert();
}
