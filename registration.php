

<?php require_once('connection.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><h1>Registration Form</title>
</head>

<style>
        body {
            background-image: url('logo-color (1).svg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
<style>

    .uperspace{

        marging-top:20px;

    }
</style>


<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>





<body>
<div class="uperspace">

<div class="container">

<form action="process_registration.php" method="post">
  <fieldset>
    <div id="legend">
      <legend class=""><h1>Sign up Form</h1></legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username"><strong> <h3>Username</strong> </h3></label>
      <div class="controls">
        <input type="text" id="username" name="name" placeholder="" class="input-xlarge">
        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
      </div>
    </div>





    <div class="control-group">
      <!-- Username 
      
      
      <label class="control-label"  for="username">Role</label>
      <div class="controls">
       
      
      <input type="text" id="username" name="role"  placeholder="" class="input-xlarge">
        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
      </div>
    </div>
-->

<select value="number-guests" name="role" id="number-guests">
                                    <option value="role">-Admin/Staff</option>
                                    <option name="admin" id="1">admin</option>
                                    <option name="user" id="2">user</option>
                                
                                </select>






 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email"><strong> <h3>E-mail</strong> </h3></label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password"><strong> <h3>Password</h3></strong> </label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
        <p class="help-block">Password should be at least 4 characters</p>
      </div>
    </div>
 
  
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Register</button>
        
      </div>
    </div>
  </fieldset>
</form>

<!-- ... Photo ... -->

</head>
<body>
    <div class="sidenav">
        <div class="login-main-text">
            <h2><br> </h2>
            <p></p>
        </div>
    </div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <!-- ... your form and other content ... -->
        </div>
    </div>
</body>
            <!-- ... photo ... -->

           

<!-- Add -->

<form id="loginForm" action="login.php" method="post">
    <!-- ... your form fields ... -->
    <!-- Change the label to "Home" and the variable name accordingly -->
    <button type="button" class="btn btn-success" onclick="goToHome()">Home</button>
    <button class="btn btn-success">Login</button>
</form>

<script>
    function redirectToRegister() {
        window.location.href = "registration.php";
    }

    // Change variable name for better readability
    function goToHome() {
        window.location.href = "index1.php";
    }
</script>

</body>
</html>














