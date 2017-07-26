<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//if (isset($_POST['upload'])) {

    $target = "pics/";
    $uploadOk = 1;
    //$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['photo']['tmp_name'], $target. $_FILES['photo']['name']);
    /*if(move_uploaded_file($source, $target)){
    echo 'after';
    }