<!DOCTYPE html>
<html>
<body>

<?php
$x = 5; // deklarasi diluar fungsi 
 
function myTest() {
    // menggunakan x didalem function akan mencipatakan error
    echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

</body>
</html>
