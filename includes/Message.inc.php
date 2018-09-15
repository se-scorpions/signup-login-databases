<?php

if(isset($_POST['send'])) {

    include_once 'dbh2.inc.php';

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $subject = mysqli_real_escape_string($conn,$_POST['subject']);
    $msg = mysqli_real_escape_string($conn,$_POST['msg']);
    

    //error handlers

    if (empty($name) || empty($email) || empty($subject) || empty($msg)) 
    {
        
        header("Location: ../index.html?index=empty");
        exit();

    } else {
        
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            header("Location: ../index.html?index=email");
            exit();

        } else {

            $sql = "SELECT * FROM users WHERE user_email='$email'";
            $result = mysqli_query($conn,$sql);
            $resultcheck = mysqli_num_rows($result);

            if($resultcheck > 0) {
                header("Location: ../index.html?index=emailtaken");
                exit();

            } else {

                
                $sql = "INSERT INTO message (message_name,message_email,message_subject,message_message) VALUES ('$name','$email', '$subject', '$msg'); ";
                $result = mysqli_query($conn, $sql);

                header("Location: ../index.html?index=message_sent_sucessfully");
                exit();
            }
        }
    }
} else {
    
    header("Location: ../index.html");
    exit();
    }