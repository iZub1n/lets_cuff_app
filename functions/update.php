<?php
session_start();
if(isset($_POST['update'])){
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city = $_POST['city'];
    $gender= $_POST['gender'];
    $status = $_POST['status'];
    $desc = $_POST['desc'];
    $pfp = $_POST['pfp'];
    $pref = $_POST['pref'];
    $contact_info = $_POST['contact_info'];

    if ( empty($contact_info) ||empty($first_name) || empty($last_name) || empty($city) || empty($gender) || empty($status) || empty($desc) || empty($pfp) || empty($pref)){
        printf("Empty value processed! record not updated!");
        exit();
    }

    $mysqli = new mysqli("localhost","z2singh","Pleabros","z2singh");

    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli ->
        connect_error;
        exit();
    }
    $username = $_SESSION['username'];

    $commandText = "UPDATE users SET contact_info='$contact_info', first_name='$first_name' , last_name='$last_name', city='$city', user_picture='$pfp', user_description='$desc' , gender='$gender', relationship_status = '$status', relationship_preferences = '$pref' WHERE user_name='$username'";
    
    $result = $mysqli->query($commandText);
    echo "<script> alert('Success!') </script>";
    echo "<script> window.open('http://webdev.scs.ryerson.ca/~z2singh/lets_cuff/profileEdit.php', '_self') </script>";

}




?>