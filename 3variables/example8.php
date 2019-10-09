<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
$y = 10;

function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y']; // ini digunakan untuk memanggil variable global secara langsung
} 

myTest();
echo $y;
?>

</body>
</html>
