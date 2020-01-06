<html>
<body>
<?php

function mymsg() {
    echo "goood morning !";
    echo "<br>";
}   

mymsg();
?>
</body>
</html>

<html>
<body>
<?php

function familyname($fname) {
    echo "$fname janardhan.  <br>";
}

familyname("chandra");
familyname("swetha");
familyname("jayshree");
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
 function name($fname,$year)
 {   
     echo " $fname janardhan. age is $year <br>";
 }

 name("chandra", "63");
 name("swetha", "33");
 name("jayshree","40");
 echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
function addnumbers(int $a , int $b)
{
    return $a + $b;
}

echo addnumbers(5 , "5 days");
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php ;

function setheight(int $minheight) 
{
    echo "the height is : $minheight <br>";
}

setheight(340);
setheight();
setheight(120);
setheight();
?>
</body>
</html>