<html>
<body>
<?php
echo $status =(empty($user)) ? "anonymous" : "logged in";
echo "<br>";

$user= "swetha janardhan" ;
echo $status =(empty($user)) ? "anonymous" : "logged in" ;
?>
</body>
</html>


<html>
<body>
<?php
echo $user = $_GET["user"] ?? "anonymous";
echo("<br>");

echo $color = $color ?? "red";
?>
</body>
</html>
