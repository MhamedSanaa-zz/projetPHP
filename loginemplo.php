<?php
    session_start();
    include 'classes/employee.class.php';
    if(isset($_SESSION['name'])!="") {
        header("Location: employeedashboard.php");
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
        
        $employee = new employee;
        $auth = $employee->login($email, $pwd);
        if($auth === false)
        {
            $auth_error = 'Incorrect Email or Password!!!';
        } else {
            session_start();
            $_SESSION['eid'] = $auth['eid'];
            $_SESSION['name'] = $auth['name'];
            $_SESSION['phone'] = $auth['phone'];
            $_SESSION['email'] = $auth['email'];
            $_SESSION['pwd'] = $auth['pwd'];
            header("Location: employeedashboard.php");
        }
    }
    error:
    include 'loginemplo.phtml';