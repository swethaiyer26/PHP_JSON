<html>
<body>
<?php
$t = date("H");

if ($t < "20") {
    echo "have a nice day";
}
else
{
    echo  "have a good day";
}

?>
</body>
</html>


<html>
<body>
<?php
$t = date("H");
echo "<p> the hour of the server is" .$t;
echo "and will give the following message: </p>";

if ($t < 10) {

    echo "have a nice day";
}
elseif ($t < "20")
{
   echo " have a great day";
}
else 
{
    echo "have good night";
}
?>
