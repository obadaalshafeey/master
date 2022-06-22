<?php
session_start();

// initializing variables

$username ="";
$email ="";
$errors = array();
//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'master');
 
//if the register button is clicked
if (isset($_POST['submit'])){
$username =($_POST['username']);
$email = ($_POST['email']);
$passwordsingup = ($_POST['passwordsingup']);
$confirmpasswordsingup = ($_POST['confirmpasswordsingup']);

//ensure that form fields are filled properly 
if (empty($username)){
    array_push($errors, "username is  required ");
}
if (empty($email)){
    array_push($errors, "Email is  required ");
}
if (empty($passwordsingup)){
    array_push($errors, "password is  required ");
}
if ($passwordsingup != $confirmpasswordsingup){
    array_push($errors, "the two password do not match ");
}

//if there are no errors , save user to database 
if (count($errors) == 0){
$passwordsingup = md5($passwordsingup);
    $sql = "INSERT INTO users (username, email, password)
                VALUES ('$username','$email','$passwordsingup');";
                mysqli_query($db, $sql);
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in ";
                header('location: login.php ');
            
}else{

    echo ' error error ';
}
}
//////////////////////////////////////
if (isset($_POST['login'])){
    
    $emaillogin = ($_POST['emaillogin']);
   
    $passwordlogin = ($_POST['passwordlogin']);
    
    
    // ensure that form fields are filled properly 
    
    if (empty($emaillogin)){
        array_push($errors, "Email is  required ");
    }
    if (empty($passwordlogin)){
        array_push($errors, "password is  required ");
    }
   if(count($errors) == 0){
    $passwordlogin = md5($passwordlogin);
    $query = "SELECT * FROM users WHERE  email='$emaillogin' AND password='$passwordlogin' ;";
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) == 1){
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in ";
    header('location: home.php ');

}else{

    array_push($errors, "wrong user name /password combination");
    

}

   }


if(isset($_GET['logout'])){
session_destroy();
unset($_SESSION['username']);
header('location: singup.php');

}
}

?>