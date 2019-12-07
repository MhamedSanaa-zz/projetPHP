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
    <script src="https://kit.fontawesome.com/7f1324c4ec.js" crossorigin="anonymous"></script>
    <script src=".\js\bootstrap.js"></script>
    <title>Document</title>
</head>
<body>
    <?php
    include 'classes/customer.class.php';
    ?>
    <div class="container">
        <div>
            <span>
                <?php echo $_SESSION['name']?>
            </span>
            <span>
                <?php echo $_SESSION['phone']?>
            </span>
        </div>
        <div>
            <span>
                <?php echo $_SESSION['address']?>
            </span>
        </div>
        <div>
            <span>
                <?php echo $_SESSION['email']?>
            </span>
        </div>
        <div>
            <label for=""></label>
            <button><a href="editcustom.php">edit</a></button>

        </div>
    </div>
</body>
</html>