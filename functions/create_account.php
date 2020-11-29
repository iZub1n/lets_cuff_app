<?php

if(isset($_POST['register'])){
        
    $first_name = $_POST['f_name'];
    $last_name = $_POST['l_name'];
    $user_name = $_POST['new_user'];
    $password = $_POST['new_pwd'];
    $dob = $_POST['dob'];

    $mysqli = new mysqli("localhost","z2singh","Pleabros","z2singh");

    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli ->
        connect_error;
        exit();
    }

    $username_exists = "SELECT * from users WHERE user_name = '$user_name'";
    printf("%s", $username_exists);

    $count_username = $mysqli->query($username_exists);

    if ($count_username->num_rows>0){
        echo "<script> alert('Username Already Exists!') </script>";
        exit();
    }

    $commandText = "INSERT INTO users (password, first_name, last_name, user_name, dob)
    VALUES ('$password', '$first_name', '$last_name', '$user_name', '$dob');";
    $result = $mysqli->query($commandText);
    $_SESSION['username'] = $user_name;
    echo "<script> window.open('home.php', '_self') </script>";

}
?>