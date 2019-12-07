<?php
    session_start();
    include 'classes/customer.class.php';

    if (isset($_POST['edit'])) {
        $name=$_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        if ($_POST['pwd']=='' && $_POST['conpwd']=='') {
            $pwd = $_SESSION['pwd'];
            $conpwd = $_SESSION['pwd'];
        }
        else if ($_POST['pwd']!='' && $_POST['conpwd']!='') {
            $pwd = $_POST['pwd'];
            $conpwd = $_POST['conpwd'];
        }
        

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
        if ($pwd!=$_SESSION['pwd']) {
            $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);
        }

        $customer = new customer;
        $customer->edit($name, $email, $hashed_pwd ,$phone,$address,$_SESSION['cid']);
        session_destroy();
        unset($_SESSION['cid']);
        unset($_SESSION['name']);
        unset($_SESSION['phone']);
        unset($_SESSION['address']);
        unset($_SESSION['email']);
        unset($_SESSION['pwd']);
        header('Location:login.php');
        exit();
    }
    error:
    include 'editcustom.phtml';
