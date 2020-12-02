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
	<title>Let's Cuff - Zodiac Compatability</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="stylesheets/mainstyles.css">
	<style type="text/css">
		body {
			background: #fcdfe7;
		
			font-family: 'Quicksand', sans-serif;
			text-align: center;
		}
		h1 {
			text-align: center;
			color: #d31b1b ;
			margin-top: 50px;
		}
		h3 {
			text-align: center;
		}
		hr {
			border-top: 1px solid white;
			margin-left: 250px;
		}
		img {
			float: left;
			border-right: 1px solid #f1f1f1;
			border-bottom: 1px solid #f1f1f1;
			margin-right: 10px;
			margin-top: 20px;
		}
	</style>
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

<body>
<?php include_once("functions/navbar.php"); ?>

	<?php
		$mysqli = new mysqli("localhost", "g33grewa", "hevmyohy", "g33grewa");
		
		if ($mysqli -> connect_errno) 
		{
			echo "Failed to connect to MYSQL: " . $mysqli -> connect_error;
			exit();
		}
		
		echo "<br><h1>Zodiac Dating Compatability</h1>";
		
		$ImageText = "SELECT name, date, image, description FROM Zodiac";
		$result = $mysqli->query($ImageText);
		
		if ($result) 
		{
			while ($row = $result -> fetch_assoc()) 
			{
				printf("<br><div style=
				'overflow: hidden;
				color: white;
				border: 2px solid #f1f1f1;
				border-radius: 50px;
				margin-right: 50px;
				margin-left: 50px;
				background-color: rgba(125,1,141, 0.4);
				'><img src=%s width = '250' height = '300'><h3>%s</h3><h4>Date: %s</h4><hr><div style='padding-right: 10px; padding-left: 10px; padding-bottom: 10px;'>%s</div></div>", $row["image"], $row["name"], $row["date"], $row["description"]);
			}
		}
	?> 
</body>