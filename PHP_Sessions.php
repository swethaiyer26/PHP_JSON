<?php
session_start();
?>
<html>
<body>

<?php
$_SESSION["favcolor"]="Orange";
$_SESSION["favanimal"]="Tiger";
echo "session variables are set";
?>
</body>
</html>
