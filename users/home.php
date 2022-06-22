<?php  
?>

<?php  include('./server.php'); ?>
<?php 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div> 

<h2>home page</h2>

    </div>
    <div>
        <?php if(isset($_SESSION['seccess'])): ?>
            <?php echo $_SESSION['seccess'];
             unset($_SESSION['seccess']) ;
            ?>
               <?php  endif ?> 

               <?php if (isset($_SESSION["username"])): ?>
                <p>welcom <strong> <?php echo $_SESSION['username']; ?> </strong> </p>
                <a href="./home.php?logout='1'">logout</a>
                <?php endif ?>

    </div>


</body>
</html>