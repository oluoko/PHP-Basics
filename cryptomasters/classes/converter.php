<?php

class Converter {
 
}

interface CanConvert {
    public function convert(float $value);
}

class CryptoConverter extends Converter {
    // properties

    // constructor
     function __construct(public string $currencyCode) {
    }

    //

    // methods
    public function conver(float $value) {

    }
}