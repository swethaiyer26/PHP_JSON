<html>
<body>
<?php
$cars =array("volvo", "bmw","corolla"); 
echo " i like " . $cars[0] . "," . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$cars = array("volvo", "bmw", "sx4");
echo count($cars);
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$cars =array("volvo", "bmw","corolla"); 
$arrlength= count($cars);
 
for($x=0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>
</body>
</html>

<html>
<body>
<?php
$age=array("swetha" => "33", "arvind" => "36", "arjun"=> "2");
echo "swetha is " . $age['swetha'] . "years old";
echo "<br>";
echo "arjun is " . $age['arjun'] . "years old";
echo "<br>";
?>
</body>
</html>


<html>
<body>
<?php
$cars=array
(
    array("volvo", 20,16),
    array("bmw" , 25,14),
    array("audi" , 30,15)
);

echo $cars[0][0].": in stock: ".$cars[0][1]." , sold: ".$cars[0][2]." .<br>";
echo $cars[1][0].": in stock: ".$cars[1][1]." , sold : ".$cars[1][2]." .<br>";
echo $cars[2][0].": in stock: ".$cars[2][1]." , sold : ".$cars[2][2]." .<br>";
?>
</body>
</html>


<html>
<body>
<?php
$cars=array
(
    array("volvo", 20,16),
    array("bmw" , 25,14),
    array("audi" , 30,15)
);

for ($row= 0 ; $row <3 ; $row++) 
{
    echo "<p><b>row number $row</b></p>";
    echo "<ul>";

    for ($col=0; $col <3 ; $col++)
    {
        echo "<li>" .$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}


    ?>
    </body>
    </html>
