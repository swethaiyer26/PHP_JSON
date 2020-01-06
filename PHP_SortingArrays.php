<html>
<body>
<?php
$cars = array("volvo","audi","corolla","sx4");
sort($cars);

$clength=count($cars);
for($x=0; $x< $clength ; $x++){
    echo $cars[$x];
    echo "<br>";
}
echo "<br>";
?>
</body>
</html>


<html>
<body>
<?php
$cars = array("volvo","audi","corolla","sx4");
rsort($cars);

$clength=count($cars);
for($x=0; $x< $clength ; $x++){
    echo $cars[$x];
    echo "<br>";
}
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$numbers= array(8,7,5,2);
sort($numbers);

$clength=count($numbers);
for($x=0; $x < $clength; $x++){
echo $numbers[$x];
echo "<br>";
}
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$numbers= array(8,7,5,2);
rsort($numbers);

$clength=count($numbers);
for($x=0; $x < $clength; $x++){
echo $numbers[$x];
echo "<br>";
}
echo "<br>";
?>
</body>
</html>