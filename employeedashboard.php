<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <script src="js/bootstrap.min.js" ></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food Ordering Site</title>
</head>
<body>
<section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><h4>Food Ordering Site</h4></a>
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
<section id="links">
    <div class="container py-3">
        <div class="row">
            <div class="col-ms">   
            <a href="indexprod.php" class="btn btn-success">PRODUCTS MANAGEMENT</a>
            </div>
            <div class="col-ms">
            <a href="indexveh.php" class="btn btn-success">VEHICLE MANAGEMENT</a>
            </div>
            <div class="col-ms">
            <a href="admintable.php" class="btn btn-success">ORDERS MANAGMENT</a>
            </div>
         </div>
    </div>
</section>
<section id="stats">
</section>
<section id="footer">
     <div class="container text-center">
         <p>ISET Bizerte</p>
    </div>
</section>
<script src="js/smooth-scroll.js"></script>
<script>
var scroll = new SmoothScroll('a[href*="#"]');
</script>
<script>
$(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
	});
});
</script>
</body>
</html>