<?php
include("classes.php");

$code = $_GET['code'] ?? "BTC";
$converter = new CryptoConverter($code);
$rateInUSD = $converter->convert();
echo "{'rate': $rateInUSD}";
