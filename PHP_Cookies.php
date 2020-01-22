<?php
$cookie_name="user";
$cookie_value="john Doe";
setcookie($cookie_name,$cookie_value, time() + (86400 * 30), "/");
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name]))  {
    echo  "Cookie named '" . $cookie_name ."' is not set ! ";
} else {
     echo " Cookie '"  . $cookie_name . "' is set ! <br>";
     echo " Value is: " . $_COOKIE[$cookie_name] ;
}
?>
<p><strong>Note:</strong>You might have to reload the page to see the value of the cookie.</p>
</body>
</html>


<?php
$cookie_name="user";
$cookie_value="salman khan";
setcookie($cookie_name,$cookie_value,time() + (86400*30), "/");
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) 
{
    echo " Cookie named  '" . $cookie_name . "' is not set !";
}
else {
    echo "Cookie '" . $cookie_name . "' is set ! <br>";
    echo "Value is :" .$_COOKIE[$cookie_name];
}
?>
<p><strong>Note:</strong>you might have to reload the page to see the value of the cookie.</p>
</body>
</html>


<?php
setcookie("user","", time() - 3600);
?>
<html>
<body>
<?php
echo "Cookie 'user' is deleted.";
?>
</body>
</html>

