<html>
<body>
<?php
$a= 6789;
var_dump(is_int($a));
echo "<br>";

$a= 67.89;
var_dump(is_integer($a));
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$a= 87.98;
var_dump(is_float($a));
echo "<br>";

$b=768.43;
var_dump(is_long($b));
echo "<br>";

$c=768.43;
var_dump(is_double($c));
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$a= 6.7e891;
var_dump($a);
echo "<br>";

$f= 6891;
var_dump($f);
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$p=acos(5);
var_dump($p);
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$m= 8769;
var_dump(is_numeric($m));
echo "<br>";

$m= "8769";
var_dump(is_numeric($m));
echo "<br>";

$m= "87.69" + 100;
var_dump(is_numeric($m));
echo "<br>";

$m= "hello";
var_dump(is_numeric($m));
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$g=3456.789;
$int_cast=(int)$g;
echo $int_cast;
echo "<br>";

$g="3456.789";
$int_cast=(int)$g;
echo $int_cast;
echo "<br>";
?>
</body>
</html>


