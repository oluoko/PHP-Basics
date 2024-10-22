<?php
include("classes.php");

$code = $_GET['code'];
$converter = new CryptoConverter($code);
$rateInUSD = $converter->convert();
echo "{'rate': $rateInUSD}";
