<?php

namespace App\DecodeConvertor;

interface DecodeMorzeInterface
{
    public function __construct($string);
    public function convert();
}
