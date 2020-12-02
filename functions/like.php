<?php


session_start();

if(isset($_POST['like'])){

    $get_target= $_POST['target'];
    $username = $_SESSION['username'];
    $mysqli = new mysqli("localhost","z2singh","Pleabros","z2singh");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli ->
        connect_error;
        exit();
    }
  
    $target = "SELECT * from users WHERE user_name= '$get_target' ";
    $me = "SELECT * from users WHERE user_name = '$username'";

    $run_target = $mysqli->query($target);
    $run_me = $mysqli->query($me);
    $user_id;
    while ($row_user = mysqli_fetch_row($run_me)) {
        $user_id = $row_user[0];
    }

    while ($row_target = mysqli_fetch_row($run_target)) {

    $likes = $row_target[12] +1;


    $inc_likes = "UPDATE users SET likes='$likes' WHERE user_name='$get_target'";
    $run_inc_likes = $mysqli->query($inc_likes);
    

    $add_to_list = "INSERT INTO liked (user_id, target_id) VALUES ('$user_id', '$row_target[0]')";
    echo "$user_id";
    $run_add = $mysqli->query($add_to_list);
    }
    
    echo "<script>alert('User Liked, contact has been added to the your list!')</script>";
    echo "<script> window.open('../home.php', '_self') </script>";

    
}
?>