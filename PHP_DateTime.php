<html>
<body>
<?php
echo " today is "  . date("Y/m/d") . "<br>";
echo " today is "  . date("Y.m.d") . "<br>";
echo "today is "   . date("Y-m-d") . "<br>";
echo "today is "   .date("l") . "<br>";
?>
</body>
</html>

<html>
<body>

2010-<?php echo  date("Y") . "<br>";?>

</body>
</html>


<html>
<body>
<?php
echo " the time is " . date("h:i:sa") . "<br>";
?>
</body>
</html>

<html>
<body>
<?php
date_default_timezone_set("America/New_York");
echo " the time is " . date("h:i:sa") ;
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$d=mktime(11,52,5,1,26,2018);
echo "Created date is " .date("Y-m-d h:i:sa",$d);
echo "<br>";
?>
</body>
</html>


<html>
<body>
<?php
$d=strtotime("15:14pm January 16 2020");
echo " Created date is " .date("Y.m.d h:i:sa",$d);
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa",$d)  . "<br>";
$d=strtotime("next saturday");
echo date("Y-m-d h:i:sa",$d)  ."<br>";
$d=strtotime("+ 4months");
echo date("Y-m-d h:i:sa",$d)  ."<br>";
?>
</body>
</html>

<html>
<body>
<?php
$startdate=strtotime("Saturday");
$enddate=strtotime("+6 weeks",$startdate);

while($startdate < $enddate){
    echo date("M d",$startdate) . "<br>";
    $startdate=strtotime("+ 1 week", $startdate);
}
    ?>
    </body>
    </html>



 <html>
<body>
<?php
$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "there are   . $d2 .  days before july 04";
?>
</body>
</html>
