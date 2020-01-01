<html>
<body>
<?php
define("greeting","welcome to w3schools!");
echo greeting;
echo "<br>";
?>


<html>
<body>
<?php
define("greeting","welcome to w3schools!",true);
echo greeting;
echo "<br>";
?>




<?php
define("greeting","hello world!");

function myfunction()
{
    echo greeting ;
}

myfunction()
?>

