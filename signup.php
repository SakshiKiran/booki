<?php
include("connect.php");
 $name = $email = $password = $con_pass="";
 $email_err= $password_err=$con_pass_err="";

 if($_SERVER["REQUEST_METHOD"]=="POST"){
     $name = $_POST["name"];
     $sql = "select id from user where email = ?";
     if($stmt = mysqli_prepare($link,$sql)){
         mysqli_stmt_store_result($stmt);

         if(mysqli_stmt_execute($stmt)){
             mysqli_stmt_store_result($stmt);

             if(mysqli_stmt_execute($stmt)==1){
                 $email_err"The email already exists";
             }
             else{
                 $email = $_POST["email"];
             }
             }
         }
        }

        ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Signup</h1>
    <form action="post">
        <label> Name:</label>
        <input type="text" name="name" required>
        <br><br>
        <label> Email:</label>
        <input type="email" name="email" required>
        <br><br>
        <label> Password:</label>
        <input type="password" name="password" required>
        <br><br>
        <label>Confirm Password:</label>
        <input type="password" name="con_password" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>



