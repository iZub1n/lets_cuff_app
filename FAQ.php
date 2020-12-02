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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Frequently Asked Questions</title>
	<link rel="stylesheet" href="Style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="js/faq.js"></script>
	<title>Let's Cuff - FAQ</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="stylesheets/mainstyles.css">
  <link rel="stylesheet" href="stylesheets/styles3.css">
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

<body style="background-color: #fcdfe7">
<?php include_once("functions/navbar.php"); ?>
	<h1 class='mainHeads'>Frequently Asked Questions</h1>
	<div class="FAQ">
		<div class="acc">
			<h3>What is Let's Cuff?</h3>
			<div class="content">
				<div class="content-inner">
					<p>Lets Cuff was introduced at Ryerson University in 2020 and is the worlds most popular app for meeting new people. Its been downloaded more than 340 million times and is available in 190 countries and 40+ languages. 

					Lets Cuff is a place built on a world of possibility. The possibility of forming connections that could lead to more. If youre here to meet new people, expand your social network, meet locals when youre traveling, or just live in the now, youve come to the right place. 

					Lets Cuff is simple and fun. Use the swipe feature to like someone, and if someone likes you back, it's a match! Just tap through the people youre interested in meeting to spark something new.</p>
				</div>
			</div>
			<h3>Is Let's Cuff free?</h3>
			<div class="content">
				<div class="content-inner">
					<p>The basics: Match. Chat. Date. Thats our mantra. Its easy and fun to find people on Lets Cuff. Make your profile stand out with your best pics and a little something about you to increase your match making potential. Swipe on a profile to like someone, swipe left to pass. If someone likes you back, Its a match!
					<br>
					More Features? That's a Plus:
					Upgrade to Lets Cuff Plus for premium features, including: Unlimited Likes so you can use the Swipe Right feature to your hearts content, take advantage of the Rewind feature to give someone a second chance, and additional Super Likes to stand out from the crowd.
					<br>	
					Go Platinum:
					Upgrade to Lets Cuff Platinum for all the same, great features you get with Plus, in addition to two exclusive features to increase your chances of getting a match: Unlimited rewinds and super likes.</p>
				</div>
			</div>
			<h3>Can I use Let's Cuff anywhere in the world?</h3>
			<div class="content">
				<div class="content-inner">
					<p>Lets Cuff is a global online dating platform and is available in 190+ countries. Interested in dating, meeting new people, expanding your social network, or meeting locals while traveling?</p>
				</div>
			</div>
			<h3>What is the minimum age requirement?</h3>
			<div class="content">
				<div class="content-inner">
					<p>The minimum age requirement for Lets Cuff is 18 years old.

						If you've been blocked from Lets Cuff because the birthdate you entered on signup signifies that you're under 18 years old, you'll remain blocked from the service for the amount of time specified on the login screen. You can continue with the signup process once that amount of time has passed. </p>
				</div>
			</div>
			<h3>What to do during COVID-19?</h3>
			<div class="content">
				<div class="content-inner">
					<p>Your well-being is a top priority. Join us in staying informed on the most up-to-date best practices for staying safe and healthy. We are closely monitoring updates from the World Health Organization (WHO), and encourage that you do the same.   

					While we hope to be a place of connection during a time that can feel isolating for many, we strongly encourage that new connections stay digital for now. In most places around the world, its time to stay home, and adhering to the latest local recommendations is the responsible thing to do for the safety and health of everyone. </p>
				</div>
			</div>
			<h3>I accidentally unmatched someone.</h3>
			<div class="content">
				<div class="content-inner">
					<p>When you umatch someone, youll disappear from their match list and they'll disappear from yours. Unfortunately, unmatching is a permanent action that cannot be undone. </p>
				</div>
			</div>
		</div>
	</div>
</body>