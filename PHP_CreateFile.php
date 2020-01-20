<html>
<body>
 <?php
 $myfile=fopen("newfile.txt", "w") or die(" Unable to die");
 $txt= "Swetha Janardhan\n";
 fwrite($myfile, $txt);
 $txt= "jayshree \n";
 fwrite($myfile, $txt);
 fclose($myfile);
 ?>
 </body>
</html>

<html>
<body>
<?php
$myfile=fopen("newfile.txt" , "w") or die("unable to open");
$txt= "arjun arvind\n";
fwrite($myfile, $txt);
$txt= "vaishnavi \n";
fwrite($myfile, $txt);
fclose($myfile);
?>
</body>
</html>

