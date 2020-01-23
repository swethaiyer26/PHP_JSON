<html>
<body>
<?php
$age=array("swetha" =>33,"arvind" =>36,"arjun" =>2);
echo json_encode($age);
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$cars=array("audi","sx4","wagonr","i10");
echo json_encode($cars);
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$jsonobj='{"swetha":33,"arvind":36,"arjun":2}';
var_dump(json_decode($jsonobj));
echo "<br>";
?>
</body>
</html>


<html>
<body>
<?php
$jsonobj='{"swetha":33,"arvind":36,"arjun":2}';
var_dump(json_decode($jsonobj,true));
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$jsonobj='{"swetha":33,"arvind":36,"arjun":2}';
$obj=json_decode($jsonobj);
echo $obj->swetha;
echo $obj ->arvind;
echo $obj ->arjun;
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$jsonobj = '{"swetha":33,"arvind":36","arjun":2}';
$arr =json_decode($jsonobj,true);

echo $arr["swetha"];
echo $arr["arvind"];
echo $arr["arjun"];
echo "<br>";
?>
</body>
</html>


