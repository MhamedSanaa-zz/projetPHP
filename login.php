<?php
    session_start();

    include 'classes/customer.class.php';

    if(isset($_SESSION['name'])!="") {
        header("Location: customdashboard.phtml");
    }

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $email_error = "Please Enter Valid Email";
            goto error;
        }

        if(strlen($pwd) < 6) {
            $pwd_error = "Password must be minimum of 6 characters";
            goto error;
        }
        
        $customer = new customer;
        $auth = $customer->login($email, $pwd);
        if($auth === false)
        {
            $auth_error = 'Incorrect Email or Password!!!';
        } else {
            session_start();
            $_SESSION['name'] = $auth['name'];
            $_SESSION['email'] = $auth['email'];
            header("Location: customdashboard.phtml");
        }
    }
    error:
    include 'login.phtml';