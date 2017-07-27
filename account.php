<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
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
                    <form action="logout.php" method="get">
                    <p><input type="submit" id="home_bt" value="Log Out"></p>
                    </form>
                </center>
            <?php endif ?>
        </div>

    </body>
</html>