<?php include('./server.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./singup.php" method="POST">
        <!-- display validation errors here  -->
        <?php include('errors.php');?>

        <label for="">username</label>
<input type="text" name="username" value="<?php echo $username; ?>" >
<br>
<label for="">email</label>

<input type="text" name="email"   value="<?php echo $email; ?>" >
<br><label for="password">password</label>
<input type="password" name="passwordsingup"  minlength="8">


<br>
<label for="password">confirm password</label>
<input type="password" name="confirmpasswordsingup">


<button type="submit" name="submit" >submit</button>
    <a href="./login.php">login</a>
</form>
</body>
</html>