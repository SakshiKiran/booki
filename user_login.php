<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true){
    header("location:index.html");
    exit;
}
$error="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];
                // if(isset($_POST["username"] && isset($_POST["password"]))){
        $sql = "select username,password from user where username='$username' and password='$password' ";
        $result = mysqli_query($link,$sql);
        if(mysqli_num_rows($result)>0){
            session_start();
            $_SESSION['loggedin']==true;
            header("location:index.html");
        }
         else{
         $error = "Enter proper username and password";
         }
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-B">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link href="css/bootstrap.css" rel="stylesheet">
       </head>
<body>
    <h1>User Login</h1>
    <br><br>
<form action="" method="POST">
<label>Username:</label>
<input type="text" name="username">
<br><br>
<label>Password:</label>
<input type="password" name="password" >
<br>
<input type="submit" value="Submit"> 
<br><br>
</form>

<span><?php echo $error; ?> </span>

<h2>New User?</h1>
<br>
<p><a class="glyphicon glyphicon-new-window" href="signup.php"> Register</a><br><br><a class="glyphicon glyphicon-arrow-left" href="welcome(login).php"> Back</a></p>



<span><?php echo $error; ?> </span>

   
</body>
</html>