<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Logged In</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2>Your Account</h2>
        </div>
        <div class="cont">
            <?php if (isset($_SESSION['username'])) : ?>
                <center>
                    <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                    <p> <a href="login.php?logout='1'" style="color: red;"><input type="submit" id="home_bt" value="Log Out"></a> </p>
                </center>
            <?php endif ?>
        </div>

    </body>
</html>