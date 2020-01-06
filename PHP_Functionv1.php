<html>
<body>
<?php 

function setheight( $minheight) 
{
    echo " $minheight cms <br>";
}

setheight("340");
setheight();
setheight("120");
setheight();
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php 
 
function sum(int $c , int $d): integer
{
         return $c +  $d ;
     

}

echo " 4 + 6 = " . sum(4 ,6) . " <br>";
echo "15 + 16 =" . sum(15,16) . "<br>";
?>
</body>
</html>

<html>
<body>
<?php 

function addnumbers(float $a,float b):float {
    return $a + $b;
}

echo addnumbers(1.2, 5.2);
?>
</body>
</html>