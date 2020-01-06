<html>
<body>
<?php
$x=45;
$y=35;

function addition() {
    $GLOBALS['z']=$GLOBALS['x'] + $GLOBALS['y'];

}

addition();
echo $z;
echo "<br>";
?>
</body>
</html>

<html>
<body>
<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['REQUEST_TIME'];
echo "<br>";
?>
</body>
</html>


<html>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] =="POST") {
    $name=htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "name is empty";
    }
    else{
        echo $name;
    }
    }
    ?>
    </body>
    </html>

    <html>
    <body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
    </form>

    <?php
    if( $_SERVER["REQUEST_METHOD"] =="POST"){
        $name=$_POST['fname'] ;

            if(empty($fname)) {
                echo "name is empty";
            }
            else{
                echo $name;
            }
            }
        ?>
        </body>
        </html>


        <html>
        <body>
        < a href ="test_get.php?subject=PHP&web="W3schools.com">Test $GET</a>

        <?php
        echo "study" .$_GET['subject'] . "at" . $_GET['web'];
        ?>
        </body>
        </html>

