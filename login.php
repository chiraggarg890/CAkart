<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formstyle.css">
    <title>Login Page</title>
</head>
<body>
   <span> <a href="./index.html"><img id="back" src="back image.jpg" alt=""></a></span>
    <div class="signupFrm">
        <form action="" class="form">
          <h1 class="title"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Login</h1>
    
          <!-- <div class="inputContainer">
            <input type="text" class="input" placeholder="a">
            <label for="" class="label">Email</label>
          </div> -->
    
          <div class="inputContainer">
            <input type="text" class="input" placeholder="a"  required>
            <label for="" class="label">Username</label>
          </div>
    
          <div class="inputContainer">
            <input type="text" class="input" placeholder="a" required>
            <label for="" class="label">Password</label>
          </div>
    
          <!-- <div class="inputContainer">
            <input type="text" class="input" placeholder="a">
            <label for="" class="label">Confirm Password</label>
          </div> -->
          <div class="signup_link">
            Not a member? <a href="signup.php">Signup</a>
          </div>
          <input type="submit" class="submitBtn" name="login" value="Submit">
        </form>
      </div>
</body>
</html>