<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Food For All</title>
</head>
<body>
<section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="customdashboard.php"><img src="logo.svg"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="acccustom.php">Hey,<?=$_SESSION["name"] ?></a>
                    </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="product.php">Menu <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="customdashboard.php#contactus">Contact-Us </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                  </ul>
                </div>
          </nav>
</section>
<br>
    <?php
    include 'classes/customer.class.php';
    ?>
    <div class="container">
        <div class="form-group">
            <span class="form-control">
                Username :  <?php echo $_SESSION['name']?>
            </span>
</div>
        <div class="form-group">
            <span class="form-control">
                Phone :    <?php echo $_SESSION['phone']?>
            </span>
        </div>
        <div class="form-group">
            <span class="form-control">
                address :  <?php echo $_SESSION['address']?>
            </span>
        </div>
        <div class="form-group">
            <span class="form-control">
                Email :     <?php echo $_SESSION['email']?>
            </span>
        </div>
        <div class="form-group">
        <a href="editcustom.php" id="mybtn" class="btn btn-lg btn-block" >edit</a>
        </div>
    </div>
    <section id="footer">
    <div class="container text-center">
        <p>ISET Bizerte</p>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js" ></script>
        <script src="js/smooth-scroll.js"></script>
        <script src="https://kit.fontawesome.com/0d23adf6ea.js" crossorigin="anonymous"></script>
</body>
</html>