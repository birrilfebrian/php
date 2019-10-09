<!DOCTYPE html>
<html>
<body>

<?php
class Car {
    function Car() {
        $this->model = "VW";
    }
}
// membuat object
$herbie = new Car();

// memanggil object 
echo $herbie->model;
?>

</body>
</html>
