<?php
    session_start();
    include 'classes/customer.class.php';
    echo $_SESSION['cid'] = $auth['cid'];
    echo $_SESSION['name'] = $auth['name'];
    echo $_SESSION['phone'] = $auth['phone'];
    echo $_SESSION['address'] = $auth['address'];;
    echo $_SESSION['email'] = $auth['email'];
    echo $_SESSION['pwd'] = $auth['pwd'];
    
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

        $customer = new customer;
        $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);
        $customer->edit($name, $email, $hashed_pwd ,$phone,$address,$_SESSION['cid']);
        session_destroy();
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        header('Location:login.php');
        exit();
    }
    error:
    include 'editcustom.phtml';
