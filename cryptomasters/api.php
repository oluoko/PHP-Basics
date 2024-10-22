<?php
include("classes.php");

$code = $_GET['code'];
$converter = new CryptoConverter($code);
