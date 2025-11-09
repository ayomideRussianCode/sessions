<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    //example credentials
    $username = 'admin';
    $password = 'secret';


    // get input from the user
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

}
?>

















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
   <h2>Login Page</h2> 

   <form method="POST">

   <label for="username">Username</label>
   <input id="username" type = "text" name="username"><br> <br>
     <label for="password">Password</label>
   <input id="password" type = "text" name="password"> <br><br>
   <input type="submit" value="Login">

   </form>
</body>
</html>