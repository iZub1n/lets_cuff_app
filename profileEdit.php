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
<script>
    function validate(formName) {
    alert(formName.first_name.value)
    if(!/^[a-zA-Z]+$/.test(formName.first_name.value)) {
        alert("Invalid first name");
        return false;
    }
    if(!/^[a-zA-Z]+$/.test(formName.last_name.value)) {
        alert("Invalid last name");
        return false;
    }

    if(!/^[a-zA-Z]+$/.test(formName.city.value)) {
        alert("Invalid city name");
        return false;
    }

    if(formName.gender.value.length == 0) {
        alert("Please Select a Gender");
        return false;
    }


    if(formName.desc.value.length > 250) {
        alert("Description Too long (Limit: 255 char)");
        return false;
    }
  
}
</script>

<body style="background-color: #fcdfe7;">
<?php include_once("functions/navbar.php"); ?>

<?php
 $mysqli = new mysqli("localhost","z2singh","Pleabros","z2singh");
 $username = $_SESSION[username];
 $person = "SELECT * FROM users WHERE user_name = '$username' ";
 $result = $mysqli->query($person);

 if ($result) {
     while ($row = mysqli_fetch_row($result)) {
        printf("
        
    <div class='container-fluid' >
        <h2 class='mainHeads'>$_SESSION[username]</h2>
        <h4>Profile Editor</h4>

        

        <form action='functions/update.php' method='post' name='update' onsubmit='return validate(update)'>

            <div class='form-group'>
            <label for='first_name'>First Name:</label>
            <input type='text' class='form-control' id='first_name' value='%s' name='first_name' required>
            </div>

            <div class='form-group'>
            <label for='last_name'>Last Name:</label>
            <input type='text' class='form-control' id='last_name' value='%s' name='last_name' required>
            </div>

            <div class='form-group'>
            <label for='contact_info'>Contact (Important to Update!):</label>
            <input type='text' class='form-control' id='contact_info' value='%s' name='contact_info' required>
            </div>

            <div class='form-group'>
            <label for='city'>City:</label>
            <input type='text' class='form-control' id='city' value='%s' name='city' required>
            </div>
            
            <div class='form-group'>
            <label for='pfp'>User Profile Picture (Please Provide a link (Max 255 characters) of hosted picture (ex: Imgur, Facebook, LinkedIn)):</label>
            <input type='text' class='form-control' id='pfp' value='%s' name='pfp' required>
            </div>

            <div class='form-group'>
            <label for='desc'>User Description - Write Something About Yourself:</label>
            <textarea class='form-control' rows='5' id='desc' name='desc'>%s</textarea>
            </div>

            <div class='form-group'>
                <label for='gender'>Gender:</label>
                <select id='gender' name='gender'>
                <option value=''>----Please Choose----</option>
                    <option value='Non Binary'>Non Binary</option>
                    <option value='Male'>Male</option>
                    <option value='Female'>Female</option>
                </select>
            </div>

            <div class='form-group'>
            <label for='status'>Relationship Status:</label>
            <select id='status' name='status'>
                <option value='s'>Single</option>
                <option value='t'>Taken</option>
            </select>
            </div>

            <div class='form-group'>
            <label for='pref'>Relationship Preferences (Limit 25 char):</label>
            <input type='text' class='form-control' id='pref' value='%s' name='pref' required>
            </div>

            <button type='submit' class='btn btn-info' name='update'>Update</button>
           
        </form>
        </div>
        ", $row[2], $row[3], $row[13],$row[9], $row[11], $row[6], $row[8]);
    }
 }
?>

</body>
</html>