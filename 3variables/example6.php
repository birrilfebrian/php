<!DOCTYPE html>
<html>
<body>

<?php
function myTest() {
    $x = 5; // deklarasi di dalam fungsi
    echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

// jadi pemanggilan deklarasi di luar fungsi akan menciptakan error
echo "<p>Variable x outside function is: $x</p>";
?>

</body>
</html>
