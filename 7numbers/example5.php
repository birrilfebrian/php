<?php
$x = 5985;
var_dump(is_numeric($x)); //mengecek apakah variable merupakan numeric

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
?> 