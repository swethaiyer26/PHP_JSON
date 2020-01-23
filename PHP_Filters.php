<html>
<head>
<style>
table,th,td {
    border : 2px solid green;
    border-collapse:collapse;
}
th,td {
    padding:5px;
}
</style>
</head>
<body>
<table>
<tr>
<td>Filter Name</td>
<td>Filter ID</td>
</tr>
<?php
foreach(filter_list()as $id=>$filter) {
    echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
}
?>
</table>
</body>
</html>


<html>
<body>

<?php
$str="<h1>Hello world!<h1>";
$newstr=filter_var($str,FILTER_SANITIZE_STRING);
echo $newstr;
echo "<br>";
?>
</body>
</html>


<html>
<body>
<?php
$int=250;

if(!filter_var($int,FILTER_VALIDATE_INT) === false) {
    echo ("integer is valid");
} else 
{
    echo ("integer is not valid");
}
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$int1=0;

if (filter_var($int1,FILTER_VALIDATE_INT) === 0  || !filter_var($int1,FILTER_VALIDATE_INT) === false) {
    echo ("integer is valid");
} else 
{
    echo ("integer is not valid");
}
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$ip= "127.0.0.1";

if(!filter_var($ip,FILTER_VALIDATE_IP) === false) {
    echo("ip adress is valid");
}
else{
    echo("ip address is not valid");
}
echo "<br>";
?>
</body>
</html>


<html>
<body>
<?php
$email="swetha@google.com";

$email=filter_var($email,FILTER_SANITIZE_EMAIL);

if(!filter_var($email,FILTER_VALIDATE_EMAIL)=== false){
    echo("$email is valid address");
}
else {
    echo("$email is not valid address");
}
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$url="https://www.google.com";
$url=filter_var($url,FILTER_SANITIZE_URL);

if(!filter_var($url,FILTER_VALIDATE_URL)=== false) {
    echo("$url is a valid url");
}else {
    echo("$url is not an valid url");
}
echo "<br>";
?>
</body>
</html>