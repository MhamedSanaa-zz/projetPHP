<?php
    include 'customer.class.php';

    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $adress = $_POST['adress'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $conpwd = $_POST['conpwd'];

        if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
            $name_error = "Name must contain only letters and space";
            goto error;
        }
        if (!preg_match("/^[0-9]+$/",$phone)) {
            $phone_error = "Name must contain only numbers";
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
        $hashed_password = password_hash($pwd, PASSWORD_DEFAULT);
        $customer->customerReg($name,$email,$hashed_password,$phone,$adress);
        header('Location:login.php');
        exit();
    }
    error:
    include 'register.phtml';