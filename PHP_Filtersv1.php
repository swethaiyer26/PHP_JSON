<html>
<body>
<?php
$int=256;
$min=1;
$max=200;

if(filter_var($int,FILTER_VALIDATE_INT, array("options" => array("min_range" =>$min, "max_range" =>$max))) === false ) {
    echo ("variable not within the legal range" );
}
else{
    echo("variable within the legal range");
}
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$ip="2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if(!filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6) === false) {
    echo("$ip is a valid ipv6 address");
}
else{
    echo("$ip is not a valid ipv6 address");
}
echo "<br>";
?>
</body>
</html>


<html>
<body>
<?php
$url="https://www.google.com";
if(!filter_var($url,FILTER_VALIDATE_URL) === false) {
    echo("$url is a valid url");
}
else
{
    echo("$url is not a valid url");
}
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$str="hello world!ÆØÅ" ;
$newstr=filter_var($str,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
echo "$newstr";
echo "<br>";
?>
</body>
</html>
