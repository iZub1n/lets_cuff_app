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
        <title>Let's Cuff Partner Builder</title>
        <meta charset="UTF-8"/>
        <meta name="description" content="Build your ideal partner!"/>
        <meta name="author" content="HP"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="stylesheets/style.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 
    </head>
    <?php include_once("functions/navbar.php"); ?>
    <body>
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-2 text-center">
                    <h5 style="color: red;">Drag and drop to build your ideal partner!</h5>
                    <div class="row">
                        <div class="col-md">
                            <button style="margin: 10px;" type="button" class="btn btn-danger btn-lg" id="gender_button">Gender</button>
                        </div>
                        <div class="w-100"></div>
                        <br>
                        <div class="col-md">
                            <button style="margin: 10px;" type="button" class="btn btn-danger  btn-lg" id="hair_button">Hair</button>
                        </div>
                        <div class="w-100"></div>
                        <br>
                        <div class="col-md">
                            <button style="margin: 10px;" type="button" class="btn btn-danger  btn-lg" id="eyes_button">Eyes</button>
                        </div>
                        <div class="w-100"></div>
                        <br>
                        <div class="col-md">
                            <button style="margin: 10px;" type="button" class="btn btn-danger  btn-lg" id="nose_button">Nose</button>
                        </div>
                        <div class="w-100"></div>
                        <br>
                        <div class="col-md">
                            <button style="padding: 10px;" type="button" class="btn btn-danger btn-lg" id="mouth_button">Mouth</button>
                        </div>
                        <div class="w-100"></div>
                        <br>
                        <div class="col-md">
                            <button style="margin: 10px;" type="button" class="btn btn-danger  btn-lg" id="top_button">Top</button>
                        </div>
                        <div class="w-100"></div>
                        <br>
                        <div class="col-md">
                            <button style="margin: 10px;" type="button" class="btn btn-danger  btn-lg" id="bottom_button">Bottom</button>
                        </div>
                        <div class="w-100"></div>
                        <br>
                        <div class="col-md">
                            <button style="margin: 10px;" type="button" class="btn btn-danger  btn-lg" id="shoes_button">Shoes</button>
                        </div>
                    </div>
                    <br>
                   
                </div>
                <div class="col-md-10 capture" id="capture">
                    <img src="assets/img/body_male.png" class="back mb" id="body" alt="Male Body"/>
                    <img src="assets/img/body_female.png" class="back gendered" id="body" alt="Female Body"/>
                    <img src="assets/img/hair1_male.png" class="drag front hair_male mb" width="60" alt="Male Hair 1"/>
                    <img src="assets/img/hair2_male.png" class="drag front hair_male mb" width="55" alt="Male Hair 2"/>
                    <img src="assets/img/hair3_male.png" class="drag front hair_male mb" width="60" alt="Male Hair 3"/>
                    <img src="assets/img/hair4_male.png" class="drag front hair_male mb" width="65" alt="Turban (Male)"/>
                    <img src="assets/img/hair1_female.png" class="drag front hair_female gendered" width="110" alt="Long Female Hair"/>
                    <img src="assets/img/hair2_female.png" class="drag front hair_female gendered" width="82" alt="Medium length female hair"/>
                    <img src="assets/img/hair3_female.png" class="drag front hair_female gendered" width="70" alt="Short Female hair"/>
                    <img src="assets/img/eyes1.png" class="drag mid eyes" width="40" alt="Eyes 1"/>
                    <img src="assets/img/eyes2.png" class="drag mid eyes" width="43" alt="Eyes 2"/>
                    <img src="assets/img/eyes3.png" class="drag mid eyes" width="43" alt="Eyes 3"/>
                    <img src="assets/img/nose1.png" class="drag mid nose" width="15" alt="Nose 1"/>
                    <img src="assets/img/nose2.png" class="drag mid nose" width="15" alt="Nose 2"/>
                    <img src="assets/img/mouth1.png" class="drag front mouth" width="22" alt="Mouth 1"/>
                    <img src="assets/img/mouth2.png" class="drag front mouth" width="20" alt="Mouth 2"/>
                    <img src="assets/img/mouth3.png" class="drag front mouth mb" width="55" alt="Mouth 3"/>
                    <img src="assets/img/top1_male.png" class="drag mid top_male mb" width="300" alt="Male Top 1"/>
                    <img src="assets/img/top2_male.png" class="drag mid top_male mb" alt="Male Top 2"/>
                    <img src="assets/img/top3_male.png" class="drag mid top_male mb" width="180" alt="Male Top 3"/>
                    <img src="assets/img/bottom1_male.png" class="drag midback bottom_male mb" width="135" alt="Male Bottom 1"/>
                    <img src="assets/img/bottom2_male.png" class="drag midback bottom_male mb" width="150" alt="Male Bottom 2"/>
                    <img src="assets/img/shoes1_male.png" class="drag front shoes_male mb" width="190" alt="Male Shoes 1"/>
                    <img src="assets/img/shoes2_male.png" class="drag front shoes_male mb" width="200" alt="Male Shoes 2"/>
                    <img src="assets/img/top1_female.png" class="drag mid top_female gendered" width="260" alt="Dress"/>
                    <img src="assets/img/top2_female.png" class="drag mid top_female gendered" width="200" alt="Dress Shirt"/>
                    <img src="assets/img/top3_female.png" class="drag mid top_female gendered" width="185" alt="Female Sweater"/>
                    <img src="assets/img/bottom1_female.png" class="drag midback bottom_female gendered" width="130" alt="Female Bottom 1"/>
                    <img src="assets/img/bottom2_female.png" class="drag midback bottom_female gendered" width="180" alt="Female Bottom 2"/>
                    <img src="assets/img/shoes1_female.png" class="drag front shoes_female gendered" width="125" alt="Female Shoes 1"/>
                    <img src="assets/img/shoes2_female.png" class="drag front shoes_female gendered" width="200" alt="Female Shoes 2"/>
                    <img src="assets/img/sword1.png" class="drag front sword" height="150" width="600" alt="NEO Sword"/>
                </div>
            </div>
        </div>
        <script src='js/waifu.js'></script>
    </body>

</html>