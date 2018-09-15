<?php

if(isset($_POST['signup'])) {

    include_once 'dbh1.inc.php';

    $tinid = mysqli_real_escape_string($conn,$_POST['tinid']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $psw = mysqli_real_escape_string($conn,$_POST['psw']);
    $psw_repeat = mysqli_real_escape_string($conn,$_POST['psw-repeat']);

    //error handlers

    if (empty($tinid) || empty($email) || empty($username) || empty($psw) || empty($psw_repeat)) {
        
        header("Location: ../Signup.html?signup=empty");
        exit();

    } else {
        
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            header("Location: ../Signup.html?signup=email");
            exit();

        } else {

            $sql = "SELECT * FROM users WHERE user_username='$username'";
            $result = mysqli_query($conn,$sql);
            $resultcheck = mysqli_num_rows($result);

            if($resultcheck > 0) {
                header("Location: ../Signup.html?signup=usertaken");
                exit();

            } else {

                $hashedpwd = password_hash($psw, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (user_tinid,user_email, user_username, user_psw) VALUES ('$tinid','$email', '$username', '$hashedpwd'); ";
                $result = mysqli_query($conn, $sql);

                header("Location: ../I Tax-form/index.html?signup=sucess");
                exit();
            }
        }
    }
} else {
    
    header("Location: ../Signup.html");
    exit();
    }