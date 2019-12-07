<?php
    session_start();
    include 'classes/customer.class.php';
    if(isset($_SESSION['name'])!="") {
        header("Location: inde.html");
    }
    if (isset($_POST['signup'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $conpwd = $_POST['conpwd'];

        if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
            $name_error = "Name must contain only letters and space";
            goto error;
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $email_error = "Please Enter Valid Email";
            goto error;
        }
        if(strlen($pwd) < 6) {
            $pwd_error = "Password must be minimum of 6 characters";
            goto error;
        }
        if($pwd != $conpwd) {
            $conpwd_error = "Password confirmation doesn't match";
            goto error;
        }

        $customer = new customer;
        $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);
        $customer->register($name, $email, $hashed_pwd ,$phone,$address);
        header('Location:login.php');
        exit();
    }
    error:
    include 'register.phtml';
