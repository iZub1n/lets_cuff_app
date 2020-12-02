<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Cuff - Welcome </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="stylesheet" href="stylesheets/mainstyles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<script>
    function validate(form) {
            if (!validateName(form.f_name.value) || !validateName(l_name.value)){
                alert("Illegal Characters in First or Last Name!")
                return false;
            }

            if (((new Date()).getTime() - (new Date(form.dob.value).getTime())) / 1000 / 60 / 60 / 24 / 365 < 18) {
                alert("You must be at least 18 to join!");
                return false;
            }

            if((form.new_user.value).length < 5){
                
                 alert("Username must be at least 5 characters!");
                return false;
            }
            

            if((form.new_pwd_conf.value).length < 8){
                 alert("Password must be at least 8 characters!");
                return false;
            }
            
            if (form.new_pwd_conf.value.localeCompare(form.new_pwd.value) != 0) {
                alert("Passwords do not match.");
                return false;
            }
    
            return true;
        }

        function validateName(name){
            var filter = /^[A-Za-z]+$/
            if (filter.test(name)){
                return true;
            }
            else{
                return false;
            }
        }
</script>

<body style="background-color: #fcdfe7; color: red;">
    <div class="row">
        <div class="col-12 text-center">
             <h1 class="mainHeads">Welcome</h1>
             
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <img src="assets/logo.png" alt="logo" class="fit-image"></img>
        </div>
        
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <h4 class="mainHeads">Login</h4>
        <form action="" method="post" name="login_form">
            <div class="form-group">
                <label for="text">Username:</label>
                <input type="text" class="form-control" id="user" name="user" required>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" name="pwd" required>
            </div>
  
            <button type="submit" class="btn btn-danger" name="login">Login</button>
            <?php include("functions/login.php"); ?>
        </form> 
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <h4 class="mainHeads">Register</h4>
        <form action="" method="post" name="register_form" onsubmit="return validate(register_form)">
            <div class="form-group">
                <label for="new_user">Username:</label>
                <input type="text" class="form-control" id="new_user" name="new_user" required>
            </div>
            <div class="form-group">
                <label for="f_name">First Name:</label>
                <input type="text" class="form-control" id="f_name" name="f_name" required>
            </div>
            <div class="form-group">
                <label for="l_name">Last Name:</label>
                <input type="text" class="form-control" id="l_name" name="l_name" required>
            </div>
            <div class="form-group">
                <label for="dob">Date Of Birth:</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="new_pwd">New Password:</label>
                <input type="password" class="form-control" id="new_pwd" name="new_pwd" required>
            </div>
            <div class="form-group">
                <label for="new_pwd_conf">Confirm Password:</label>
                <input type="password" class="form-control" id="new_pwd_conf" name="new_pwd_conf" required>
            </div>
            <button type="submit" class="btn btn-danger" name="register">Register</button>
            <?php include("functions/create_account.php"); ?>
        </form> 
        </div>

    </div>

</body>
</html>