<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=".\css\bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/7f1324c4ec.js" crossorigin="anonymous"></script>
    <script src=".\js\bootstrap.js"></script>
    <title>Document</title>
</head>
<body>
    <?php
    include 'classes/employee.class.php';
    ?>
    <div class="container">
        <div class="form-group">
            <span class="form-control">
                <?php echo $_SESSION['name']?>
            </span>
            <span class="form-control">
                <?php echo $_SESSION['phone']?>
            </span>
            <span class="form-control">
                <?php echo $_SESSION['email']?>
            </span>
        </div>
        <div class="form-group">
            <button><a href="editemplo.php">edit</a></button>
        </div>
    </div>
</body>