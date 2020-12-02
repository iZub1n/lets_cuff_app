<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include("functions/header.php");

if(!isset($_SESSION['username'])){
	header("location: index.php");
}
?>
<head>
	<title>Upgrade Account</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="stylesheets/mainstyles.css">
	<style>
	.input-row{
		margin-bottom: 20px;
	}
	.input-group {
		margin-left: 18%;
		margin-bottom: 20px;
	}
	.input-group label {
		margin-right: 25px;
		margin-left: 5px;
	}
	.input-g input {
		margin-left: 20px;
		border-radius: 15px;
	}
	
	.input-g select {
		border-radius: 5px;
		height: 30px;
	}
	
	.input-row input{
		width: 80%;
		border-bottom: 1px solid #ccc;
		padding-bottom: 5px;
		border-radius: 15px;
	}
	
	button.c {
		background: pink;
		width: 100px;
		border: none;
		height: 35px;
		border-radius: 30px;
		margin-top: 20px;
		box-shadow: 0px 5px 15px 0px rgba(28,0,181,0.3);
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
<style>
    .pfp{
        border-radius: 50%;
        max-width: 60%;
    }
</style>

</head>

<body style="background-color: #fcdfe7; text-align: center">
<?php include_once("functions/navbar.php"); ?>


  </div>
</nav>
<h1 style="padding-top: 50px">Choose a Subscription</h1>
<div class='container'>
	<div style="
		width: 100%;
		height: auto;
		background-color: rgba(125,1,141, 0.4);
		border: 2px solid #f1f1f1;
		border-radius: 50px;
		padding-top: 50px;
		text-align: center;
		padding-bottom: 50px;
		margin-left:auto;
		margin-right:auto;
		margin-top: 50px;">
		<div class='row'>
		<div class='col-12 col-md-4'>
		<div style="
		width: 250px;
		height: 300px;
		background-color: white;
		border: 2px solid black;
		margin: auto;
		border-radius: 50px;">
			<h3 style="
			margin-top: 10px;
			margin-bottom: 25px;">Free</h3>
			<ul>
			  <li>Limited Likes</li><br>
			  <li>No Undo Swipes</li><br>
			  <li>1 Super Like / Day</li><br>
			  <li>Can't See Who Likes You</li>
			</ul> 
			<h5 style="margin-top: 30px">$0.00 CAD per Month</h5>			
		</div>
		</div>
		<div class='col-12 col-md-4'>
		<div style="
		width: 250px;
		height: 300px;
		margin: auto;
		background-color: white;
		border: 2px solid black;
		border-radius: 50px;">
			<h3 style="
			margin-top: 10px;
			margin-bottom: 25px;">Plus</h3>
			<ul>
			  <li>Unlimited Likes</li><br>
			  <li>Rewind Last Swipe</li><br>
			  <li>5 Super Likes / Day</li><br>
			  <li>Can't See Who Likes You</li>
			</ul> 
			<h5 style="margin-top: 30px">$4.99 CAD per Month</h5> 			
		</div>	
		</div>
		<div class='col-12 col-md-4'>
		<div style="
		width: 250px;
		height: 300px;
		margin: auto;
		background-color: white;
		border: 2px solid black;
		border-radius: 50px;">
			<h3 style="
			margin-top: 10px;
			margin-bottom: 25px;">Premium</h3>
			<ul>
			  <li>Unlimited Likes</li><br>
			  <li>Rewind All Swipes</li><br>
			  <li>8 Super Likes / Day</li><br>
			  <li>See Who Likes You</li>
			</ul>
			<h5 style="margin-top: 30px">$9.99 CAD per Month</h5>
		</div>
		</div>
	</div>
	</div>
<div class='row'>
	<div class='col-12'>
	<div style="
		width: 400px;
		height: 450px;
		background-color: rgba(125,1,141, 0.4);
		padding-top: 50px;
		text-align: center;
		border: 2px solid #f1f1f1;
		border-radius: 50px;
		margin-top: 50px;
		margin-left: auto;
		margin-right: auto;">
			<h1 style="
			margin-top: 10px;
			margin-bottom: 25px;">Payment Method</h1>
			<form action="https://formspree.io/f/xknpvklk" method="POST">
			
				<div class="input-group">
					<input type="radio" id="credit" name="card" value="Credit">
					<label for="credit">Credit</label>

					<input type="radio" id="Debit" name="card" value="Debit">
					<label for="debit">Debit</label>
					
					<input type="radio" id="paypal" name="card" value="Paypal">
					<label for="paypal">Paypal</label>
				</div>
				
				<div class="input-row">
					<input type="text" name="name" placeholder="Cardholder Name">
				</div>
				<div class="input-row">
					<input type="text" name="num" placeholder="Card Number">
				</div>
				<div class="input-g">
					<select name="Month" size="1" multiple="multiple">
						<option value="01">Jan</option>
						<option value="02">Feb</option>						
						<option value="03">Mar</option>
						<option value="04">Apr</option>
						<option value="05">May</option>
						<option value="06">Jun</option>				
						<option value="07">Jul</option>				
						<option value="08">Aug</option>				
						<option value="09">Sep</option>				
						<option value="10">Oct</option>				
						<option value="11">Nov</option>
						<option value="12">Dec</option>						
					</select>
					<select name="Year" size="1" multiple="multiple">
						<option value="2020">2020</option>
						<option value="2021">2021</option>						
						<option value="2022">2022</option>
						<option value="2023">2023</option>
						<option value="2024">2024</option>
					</select>
					<input style="width:75px" type="num" name="cvc" placeholder="CVC">
				</div>
			
				<button class='c' type="submit">CONFIRM</button>
			</form>
	</div>
	</div>
</div>
</div>
</body>
</html>