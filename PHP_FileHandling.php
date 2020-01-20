<html>
<body>

<?php
echo readfile("webdictionary.txt");
echo "<br>";
?>

</body>
</html>


<html>
<body>
<?php
$myfile=fopen("webdictionary.txt","r") or die("unable to open!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
$myfile=fopen("webdictionary.txt","w") or die("unable to open!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
echo "<br>";
?>
</body>
</html>