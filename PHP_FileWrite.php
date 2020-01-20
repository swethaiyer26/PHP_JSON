<html>
<body>
<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
echo fgets($myfile)  . "<br>";
}
fclose($myfile);
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
echo fgetc($myfile)  . "<br>";
}
fclose($myfile);
echo "<br>";
?>
</body>
</html>