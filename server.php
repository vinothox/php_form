<?php

$error = "";
/* $target_dir = "pro_pics/";
  $target_file = $target_dir . basename($_FILES["propic"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION); */
$db = mysqli_connect('localhost', 'root', 'admin@123', 'account');
if (isset($_POST['submit'])) {
    /* $target = "pics/";
      $target = $target.basename($_FILES['photo']['name']);
      $uploadOk = 1;
      $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION); */
    $target = "pics/";
    $username = $_POST['username'];
    $pwd = md5($_POST['pwd_1']);
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $mobNo = $_POST['mobNo'];
    $city = $_POST['city'];
    $pic = $target . $_FILES['photo']['name'];
    move_uploaded_file($_FILES['photo']['tmp_name'], $target . $_FILES['photo']['name']);
    $sql = "INSERT INTO users (username, password, email, dob, gender, contact, city, pic) VALUES ('$username', '$pwd', '$email', '$dob', '$gender', '$mobNo', '$city', '$pic')";
    mysqli_query($db, $sql);
    header('location: login.php');
}
?>