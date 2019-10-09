<!DOCTYPE html>
<html>
<body>

<?php
function myTest() {
    static $x = 0;
    echo $x;
    $x++;// ini merupakan increment
}

myTest(); // ini akan memanggil fungsi mytest
echo "<br>";
myTest();
echo "<br>";
myTest();
?> 

</body>
</html>
