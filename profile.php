<!DOCTYPE html>

<?php
session_start();
include("functions/header.php");

if(!isset($_SESSION['username'])){
	header("location: index.php");
}
?>

<html lang="en">
<head>
  <title>Let's Cuff - Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="stylesheets/mainstyles.css">
</head>
<script>
    $(document).ready(function() {
    function loop() {
        $('#heart').css({right:0});
        $('#heart').animate ({
            right: '+=1400',
        }, 5000, 'linear', function() {
            loop();
        });
    }
    loop();
    });
  </script>
<style>
    .pfp{
        border-radius: 50%;
        max-width: 60%;
    }
</style>

<body style="background-color: #fcdfe7; text-align: center;">

<?php include_once("functions/navbar.php"); ?>

<?php
 $mysqli = new mysqli("localhost","z2singh","Pleabros","z2singh");
 $username = $_SESSION[username];
 $person = "SELECT * FROM users WHERE user_name = '$username' ";
 $result = $mysqli->query($person);
 if ($result) {
     while ($row = mysqli_fetch_row($result)) {
        printf("
        <div class='container' style='margin-top:40px'>
        <div class='row'>
        <div class='col-xs-12 col-md-6'>
        <img class='pfp' src='%s'/>
        <br><br>
        <a href='upgrade.php' style='margin: 50px' class='btn btn-success'>Upgrade to Premium</a>
        </div>
        
        <div class='col-xs-12 col-md-6'>
        <h2 style='margin-top:10px;''>Profile Information</h2>
        <p>Some of the information can be edited in the edit tab.</p>            
        <table class='table table-hover'>
            <tbody>
                <tr>
                <th>Username</th>
                <td>%s</td>
                </tr>
                <tr>
                <th>User ID</th>
                <td>%s</td>
                </tr>
                <tr>
                <th>First Name</th>
                <td>%s</td>
                </tr>
                <tr>
                <th>Last Name</th>
                <td>%s</td>
                </tr>
                <tr>
                <tr>
                <th>Contact Information</th>
                <td>%s</td>
                </tr>
                <th>Date of Birth</th>
                <td>%s</td>
                </tr>
                <tr>
                <th>City</th>
                <td>%s</td>
                </tr>
                <tr>
                <tr>
                <th>Gender</th>
                <td>%s</td>
                </tr>
                <tr>
                <th>Relationship Status</th>
                <td>%s</td>
                </tr>
                <tr>
                <th>Relationship Preference</th>
                <td>%s</td>
                </tr>
                <tr>
                <th>Profile Picture Link</th>
                <td>%s</td>
                </tr>
                <tr>
                <th>User Description</th>
                <td>%s</td>
                </tr>

            </tbody>
            </table>
            </div>
        </div>
        </div>
        </div>

        ",$row[11], $row[4], $row[0], $row[2], $row[3], $row[13],$row[5], $row[9], $row[10], $row[7], $row[8], $row[11], $row[6]);
    }
 }
?>

</body>
</html>