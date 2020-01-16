<html>
<head>
<style>
.error {color : #00FF00};
</style>
</head>
<body>

<?php
$nameErr =$emailErr =$websiteErr =$genderErr ="";
$name =$email =$website =$comment =$gender ="";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty($_POST["name"])) {
        $nameErr="name is required";
    }
    else
    {
       $name=test_input($_POST["name"]) ;

       if(!preg_match("/^[a-zA-Z]*$/",$name)) {
           $nameErr ="only letters and white space is allowed";
       }
    }

    if(empty($_POST["email"])) {
        $emailErr="email is required";
    }
    else
    {
        $email=test_input($_POST["email"]);

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $emailErr="INVALID email format";
        }
    }

    if(empty($_POST["website"])) {
        $websiteErr="";
    }

    else
    {
        $website=test_input($_POST["email"]);

        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website))
        {
            $websiteErr="invalid url";
        }
    }

    if(empty($_POST["comment"])) {
        $comment="";
    }
    else
    {
        $comment=test_input($_POST["comment"]);
    }
    
    if(empty($_POST["gender"])) {
        $genderErr="gender is required";
     }

     else 
    {
        $gender=test_input($_POST["gender"]);

        }

     }

     function test_input($data){
     $data=trim($data);
     $data=stripslashes($data);
     $data=htmlspecialchars($data);
     return $data;
     }
 ?>

<h2> php form completion</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name" value="<?php echo $name;?>">
<span class="error">*<?php $nameErr;?></span>
<br><br>
Email:<input type="text" name="email" value="<?php echo $email;?>">
<span class="error">*<?php $emailErr;?></span>
<br><br>
Website: <input type="text" name="website" value="<?php echo $website;?>">
<span class=error><?php echo $websiteErr?></span>
<br><br>
Comment: <textarea type ="comment" rows="5" cols="45"><?php echo $comment;?></textarea>
<br><br>
Gender:<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">female
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">male
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="others") echo "checked";?> value="others">others
<span class="error">*<?php echo $genderErr?></span>
<br><br>
<input type="submit" name="submit" value="submit">
</form>

<?php
echo "<h2> Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>

 