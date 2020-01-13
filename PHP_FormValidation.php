<html>
<head>
</head>
<body>
<?php
$name=$email=$gender=$comment=$website="";

if($_SERVER["REQUEST_METHOD"]== "POST") {

    $name= test_input($_POST["name"]);
    $email=test_input($_POST["email"]);
    $gender=test_input($_POST["gender"]);
    $website=test_input($_POST["website"]);
    $comment=test_input($_POST["comment"]);
}

function test_input($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
?>

<h1>PHP Form Validation</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
Name: <input type="text" name="name">
<br><br>
Email:<input type="text" name="email">
<br><br>
Website:<input type ="text" name="website">
<br><br>
Comment: <textarea name="comment" rows="5" cols="30"></textarea>
<br><br>
Gender:
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Others">Others
 <br><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php
echo "<h2> your input</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
?>
</body>
</html>


