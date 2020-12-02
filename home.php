<!DOCTYPE html>

<?php
session_start();


if(!isset($_SESSION['username'])){
	header("location: index.php");
}
?>


<html lang="en">
<head>
  <title>Let's Cuff - Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="stylesheets/mainstyles.css">
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
</head>


<body style="background-color: #fcdfe7;">

<?php include_once("functions/navbar.php"); ?>

<div class="container-fluid">
    <h2 class="mainHeads">For You Page</h2>

  
  <div class="container-fluid">
  
    <div class="row">
        <div class="col-12" style="text-align: center">
            <div style="height: 10px; text-align: center">
            <?php
                $mysqli = new mysqli("localhost","z2singh","Pleabros","z2singh");
                $username = $_SESSION['username'];
                $person = "SELECT * FROM users WHERE NOT user_name = '$username' ORDER BY RAND() LIMIT 1";
                $result = $mysqli->query($person);
                if ($result) {
                    while ($row = mysqli_fetch_row($result)) {
                        printf("
        
                        <div class='bg-text'>
                            <img style='border-radius: 25px; height:200px' src='%s'/>
                                <h4>Hi! I am %s %s</h4>
                                <h4>Born on %s</h4>
                                <h6>username: %s</h6>
                                <h6>Gender: %s</h6>
                                <h6>Relationship Status: %s</h6>
                                <h6>Relationship Preferences: %s</h6>
                                <h6>City: %s</h6>
                                <p>%s<p>
                                <form action='functions/like.php' method='POST' name='like_form'>
                                <input type='hidden' class='form-control' id='target' name='target' value='%s' required>
                                <button type='submit' name='like' id='like' class='btn btn-danger'>YES! 💌</button>
     
                                <button onClick='window.location.reload();' type='button' class='btn btn-success'>no 🙉</button>
                                </form>
                            </div>
                        </div>

                        ",$row[11] ,$row[2] ,$row[3], $row[5], $row[4], $row[10], $row[7], $row[8], $row[9], $row[6], $row[4]);            
                    }

                }
            ?>
            

</div>

        </div>
    </div>
    <br>
    
    <div class="row">
    </div>
    <br>

  </div>
</div>


</body>
</html>