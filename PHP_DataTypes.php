<html>
<body>
<?php
$x = " hello world ";
$y = 'hello world ';

echo $x ;
echo "<br>";
echo $y ;
echo "<br>";
?>
</body>
</html>


<html>
<body>
<?php
$x = 4756 ;
$y=" swetha ";
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
?>
</body>
</html>


<html>
<body>
<?php
$c=12.2345;
var_dump($c);
echo "<br>";
?>
</body>
</html>


<html>
<body>
<?php
$cars= array( "bmw" , "audi", "wagonr");
var_dump($cars);
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php

class car {
    function car () {
        $this->model ="VW";
    }
}
    $herbie = new car();
    echo $herbie->model;
    echo "<br>";

?>
</body>
</html>

<html>
<body>
<?php

$e=" hello world ";
$e=null;
var_dump($e);
?>
</body>
</html>
