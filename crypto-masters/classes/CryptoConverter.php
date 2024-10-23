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
    public function convert(float $value=1): float|string|bool {
        $code = $this->currencyCode;
        $url = "https://cex.io/api/ticker/{$code}/USD";
        $json = file_get_contents($url);
        if($json != false) {
            $data = json_decode($json);
            $last = $data->last;
            $result = $value * $last;

            return number_format($result, 2, '.', ',');
        } else {
            return 'Conversion failed';
         }

    }
}