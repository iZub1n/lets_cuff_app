<?php


session_start();

if(isset($_POST['login'])){
        
    $user_name = $_POST['user'];
    $password = $_POST['pwd'];

    $mysqli = new mysqli("localhost","z2singh","Pleabros","z2singh");

    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli ->
        connect_error;
        exit();
    }
    $username_exists = "SELECT * from users WHERE user_name = '$user_name'";

   

    $find_user = "SELECT * from users WHERE user_name='$user_name' AND password='$password' LIMIT 1";

    $result = $mysqli->query($find_user);

    if ($result->num_rows==1){
        $_SESSION['username'] = $user_name;
        echo "<script> window.open('home.php', '_self') </script>";
        
    }
    else{
        echo "<script> alert('Invalid Credentials!') </script>";
    }

}


?>

