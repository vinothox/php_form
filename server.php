<?php

$error;
/* $target_dir = "pro_pics/";
  $target_file = $target_dir . basename($_FILES["propic"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION); */
$db = mysqli_connect('localhost', 'root', 'admin@123', 'account');
if (isset($_POST['register'])) {
    /* $target = "pics/";
      $target = $target.basename($_FILES['photo']['name']);
      $uploadOk = 1;
      $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION); */
    $username = $_POST['username'];
    $pwd = md5($_POST['pwd_1']);
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $mobNo = $_POST['mobNo'];
    $city = $_POST['city'];
    /* if(move_uploaded_file($_FILES['photo']['tname'], $target)){
      echo 'uploaded';} */
    $sql = "INSERT INTO users (username, password, email, dob, gender, contact, city) VALUES ('$username', '$pwd', '$email', '$dob', '$gender', '$mobNo', '$city')";
    mysqli_query($db, $sql);
    header('location: login.php');
}

if (isset($_POST['login'])) {

    $uname = $_POST['username'];
    $pwd1 = md5($_POST['pwd']);
    $query = "SELECT * FROM users WHERE username='$uname' AND password='$pwd1'";
    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results) == 1) {
        session_start();
        $_SESSION['username'] = $uname;
        $_SESSION['success'] = "You are now logged in";
        header('location: account.php');
    } else {
        echo "Wrong username/password combination";
    }
}
?>