<?php

include ("connect.php");
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true){
    header("location:admin_main.php");
    exit;
}
$error="";

if($_SERVER["REQUEST_METHOD"] == "POST"){

  

        $username = $_POST["username"];

        $password = $_POST["password"];

        // if(isset($_POST["username"] && isset($_POST["password"]))){

        $sql = "select username,password from admin where username='$username' and password='$password' ";

        $result = mysqli_query($link,$sql);



        if(mysqli_num_rows($result)>0){

            session_start();
            $_SESSION['loggedin']==true;
            header("location:admin_main.php");

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
    <title>Login</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
       </head>
<body>
    <h1>Admin Login</h1>
    <br><br>
    <div class="forms1">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
<label>Username:</label>
<input type="text" name="username">
<br><br>
<label>Password:</label>
<input type="password" name="password" >
<br>
<br>
<input type="submit" value="Submit">
</form>
    </div>

<p><a class="glyphicon glyphicon-arrow-left" href="welcome(login).php"> Back</a></p>

<span><?php echo $error; ?> </span>

   
</body>
</html>