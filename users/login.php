<?php include('./server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./login.php" method="post">
      <!-- display validation errors here  -->
      <?php include('errors.php');?>


<label for="email">email</label>

<input type="email" name="emaillogin"  >

<br><label for="pass">password</label>

<input type="password" name="passwordlogin" minlength="8" > 




<button type="submit" name="login" >login</button>
    <a href="./singup.php">singup</a>
</form>
</body>
</html>