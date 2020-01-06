<html>
<body>
<?php
$x=1;

while($x <=6){
    echo "the number is : $x <br>";
    $x ++;
}
    ?>
    </body>
    </html>


<html>
<body>
<?php
$x=1;

while($x <=100) {
    echo "the number is : $x <br>";
    $x+=10;
    echo "<br>";
}
?>
</body>
</html>


<html>
<body>
<?php
$x=6;

do {
    echo "the number is : $x <br>";
    $x ++;

}
while ($x <=5);
echo "<br>";
?>
</body>
</html>



<html>
<body>
<?php
$x=1;

do {
    echo "the number is : $x <br>";
    $x ++;

}
while ($x <=5);
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
for($x=0; $x <=10; $x++) {
    echo "the number is: $x <br>";
    echo "<br>";
}
?>
</body>
</html>




<html>
<body>
<?php
for($x=0; $x <=100; $x+=20) {
    echo "the number is: $x <br>";
    echo "<br>";
}
?>
</body>
</html>

<html>
<body>
<?php
$colors = array("red","yellow","blue");
foreach($colors as $value){
    echo "$value <br>";
    echo "<br>";
}
?>
</body>
</html>

<html>
<body>
<?php
$age =array("swetha"=>"33","arvind"=>"36","arjun"=>"2");

foreach($age as $x=> $val) {
    echo "$x = $val<br>";
}
?>
</body>
</html>