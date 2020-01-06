<html>
<body>
<?php
$age= array("swetha" =>"33","arvind" =>"36","arjun"=>"2");
asort($age);

foreach($age as $x => $x_value) {
    echo "Key=" . $x ." Value=" . $x_value;
echo "<br>";
}
echo "<br>";
?>
</body>
</html>


<html>
<body>
<?php
$age= array("swetha" =>"33","arvind" =>"36","arjun"=>"2");
ksort($age);

foreach($age as $x => $x_value) {
    echo "Key=" . $x ." Value=" . $x_value;

echo "<br>";
}
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$age= array("swetha" =>"33","arvind" =>"36","arjun"=>"2");
arsort($age);

foreach($age as $x => $x_value) {
    echo "Key=" . $x ." Value=" . $x_value;

echo "<br>";
}
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$age= array("swetha" =>"33","arvind" =>"36","arjun"=>"2");
krsort($age);

foreach($age as $x => $x_value) {
    echo "Key=" . $x ." Value=" . $x_value;

echo "<br>";
}
echo "<br>";
?>
</body>
</html>