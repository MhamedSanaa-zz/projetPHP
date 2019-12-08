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
    <title>Document</title>
</head>
<body>
<section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html"><img src="logo.svg"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="employeedashboard.php">Admin Panel <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="logoutemplo.php">Logout</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="accemployee.php">account</a>
                    </li>
                  </ul>
                </div>
        </nav>
</section>
<br>
    <?php
    include 'classes/employee.class.php';
    ?>
    <div class="container">
        <div class="form-group">
        <br>
            <span class="form-control">
               Name :  <?php echo $_SESSION['name']?>
            </span>
            <br>
            <span class="form-control">
               Phone :  <?php echo $_SESSION['phone']?>
            </span>
            <br>
            <span class="form-control">
            Email :  <?php echo $_SESSION['email']?>
            </span>
            <br>
        </div>
        <div class="form-group">
        <a href="editemplo.php" id="mybtn" class="btn btn-lg btn-block" >edit</a>
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