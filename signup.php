<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>SignUp Page</title>
</head>
<body>
   <span> <a href="./index.html"><img id="back" src="back image.jpg" alt=""></a></span>
    <div class="signupFrm">
        <form action="server.php" class="form">
        <?php include('error.php') ?>

          <h1 class="title">Sign Up</h1>
    
          <div class="inputContainer">
            <input type="text" class="input" placeholder="a" required name="email" >
            <label for="" class="label">Email</label>
          </div>
    
          <div class="inputContainer">
            <input type="text" class="input" placeholder="a" required name="username" >
            <label for="" class="label">Username</label>
          </div>
    
          <div class="inputContainer">
            <input type="text" class="input" placeholder="a" required name="password_1" >
            <label for="" class="label">Password</label>
          </div>
    
          <div class="inputContainer">
            <input type="text" class="input" placeholder="a" required name="password_2" >
            <label for="" class="label">Confirm Password</label>
          </div>
    Already a member?  <a href="login.php">Login</a>        <input type="submit" class="submitBtn" name="Signup" value="Sign up">
        </form>
      </div>
</body>
</html>