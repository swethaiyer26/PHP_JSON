<html>
<body>
<?php
$jsonobj='{"swetha":33,"arvind":36,"arjun":2}';
$obj=json_decode($jsonobj);
foreach($obj  as $key => $value) {
    echo  $key . " => " . $value . "<br>";

}
?>
</body>
</html>


<html>
<body>
<?php
$jsonobj='{"swetha":33,"arvind":36,"arjun":2}';
$obj1=json_decode($jsonobj,true);
foreach($obj1  as $key => $value) {
    echo  $key . " => " . $value . "<br>";

}
?>
</body>
</html>
