  
<?php
    session_start();
    include 'classes/employee.class.php';
    if(isset($_SESSION['name'])!="") {
        header("Location: employeedashboard.php");
    }
    if (isset($_POST['signup'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
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
        $employee = new employee;
        $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);
        $employee->register($name,$phone,$email,$hashed_pwd);
        header('Location:loginepmlo.php');
        exit();
    }
    error:
    include 'registeremplo.phtml';