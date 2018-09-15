<?php

    session_start();

    if(isset($_POST['login'])) {

            include 'dbh1.inc.php';

            $uname = mysqli_real_escape_string($conn,$_POST['uname']);
            $psw = mysqli_real_escape_string($conn,$_POST['psw']);
            $tinid = mysqli_real_escape_string($conn,$_POST['tinid']);

        //Error Handlers

        if(empty($uname) || empty($psw) || empty($tinid)) {
            header("Location: ../login.html?login=empty");
            exit();

        } else {

            $sql = "SELECT * FROM users WHERE user_username= '$uname'";
            $result = mysqli_query($conn,$sql);
            $resultcheck = mysqli_num_rows($result);

            if($resultcheck < 1) {
                
                header("Location: ../login.html?login=error");
                exit();

            } 
           
            /*else {
                
                if ($row = mysqli_fetch_assoc($result) ){
                    
                    $tinidcheck = password_verify($tinid,$row['user_tinid']);
                    
                    if($tinidcheck == false) {

                        header("Location: ../login.html?login=error");
                        exit();

                    }*/
                
            
            else{

                if ($row = mysqli_fetch_assoc($result) ){

                    $hashedpwdcheck = password_verify($psw,$row['user_psw']);
                    //$tinidcheck = password_verify($tinid,$row['user_tinid']);

                    if($hashedpwdcheck == false || $tinid != $row['user_tinid']) {

                        header("Location: ../login.html?login=error");
                        exit();

                    }
                
                    elseif ($hashedpwdcheck == true && $tinid == $row['user_tinid']) {

                        $_SESSION['u_tinid'] = $row['user_tinid'];
                        $_SESSION['u_email'] = $row['user_email'];
                        $_SESSION['u_username'] = $row['user_psw'];
                        header("Location: ../I Tax-form/index.html?login=success");
                        exit();
                    }
                }
            }
                //}
            //}
    }
} else {
        header("Location: ../login.html");
        exit();
    }