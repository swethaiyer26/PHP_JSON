<?php
session_start();
?>
<html>
<body>

<?php
echo "Favourite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favourite animal is " . $_SESSION["favanimal"] . ".";
?>
</body>
</html>


<?php
session_start();
?>
<html>
<body>

<?php
print_r($_SESSION);
?>
</body>
</html>



<?php
session_start();
?>
<html>
<body>

<?php
$_SESSION["favcolor"]= "white";
print_r($_SESSION);
?>
</body>
</html>

<?php
session_start();
?>
<html>
<body>

<?php
session_unset();
session_destroy();

echo "all session variables have been removed and destroyed";
?>
</body>
</html>