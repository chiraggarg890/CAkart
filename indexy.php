<?php
session_start();
if(isset($_SESSION['username'])){
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title></title>
</head>
<body>
    <h1>Successs</h1>

    //if the user logs in print information about him
<?php if(isset($_SESSION['username' ])) : ?>

<h3>Welcome <strong><?php echo $_SESSION[ 'username' ]; ?></strong></h3>
<button><a href="indexy.php?logout="1""></a></button>
<?php endif ?>
</body>
</html>