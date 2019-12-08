<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food Ordering Site</title>
</head>
<body>
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="logo.svg"></a>
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
                      <a class="nav-link" href="#contactus">Contact-Us </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                  </ul>
                </div>
          </nav>
</section>
<section id="c3">
  <div class="container">
 <div class="row">
   <div class="col-sm-3">
   </div>
   <div id="pop" class="col-sm-6">
    <div>
      <h1>All the food you need, delivered now</h1><br>
      <div class="input-group mb-3">
        <input type="text" disabled class="form-control" value="<?=$_SESSION["address"] ?>" >
        <div class="input-group-append">
          <a href="" class="btn btn-outline-secondary" type="button" id="button-addon2">Find Food</a>
        </div>    
      </div>
    </div>
    <div id="triangle"></div>
  </div>
     <div class="col-sm-3">

       </div>
 </div>
</div>
</section>
<section id="c4">
    <div class="container">
      <h1>How it works</h1>
      <div class="row">
          <div class="col-sm">
         <img src="1.svg">
         <h3 >Set delivery location</h3>
         <p >Select the location where you want us to deliver</p>
      </div>
      <div class="col-sm">
          <img src="2.svg">
          <h3 >Choose the product</h3>
          <p >Browse shops that deliver near you</p>
       </div>
       <div class="col-sm">
          <img src="3.svg">
          <h3 >Receive it at your doorstep</h3>
          <p >Your order will be delivered to you in no time</p>
       </div>
      </div>
    </div>
    </section>
      <section id="c4" background-iamge="7.png">
        <div class="container"></div>
        </section>
        <section id="conc">
          <div class="container">
            <div class="row justify-content-center">
               <div class="col-7">
            <h1 class="h1-white">20% OFF on your first order by subscribing to our newsletters!</h1>
           <p>Don't miss out on our great offers & Receive deals from all our top vendors via e-mail</p>
           <select class="form-control">
             <option>Tunisia</option>
             <option>Germany</option>
             <option>Denmark</option>
           </select>
           <input class="form-control" disabled type="text" value="<?=$_SESSION["email"] ?>">
           <button type="button" class="btn btn-secondary btn-lg btn-block">SUBSCRIBE NEWSLETTER</button>
          </div>
            </div>
        </div>
        </section>

        <section id="c4">
            <div class="container">
                <div class="row">
                  <div class="col-sm">
                    <img class="pub" src="4.png">
                  </div>
                  <div class="col-sm">
                    <img class="pub" src="5.png">
                  </div>
                  <div class="col-sm">
                    <img class="pub" src="6.png">
                  </div>
                </div>
              </div>
            </section>
            <section class="mb-4">
<section id="contactus"class="contactus">
  <h1 class="h1-responsive text-center my-5">Contact us</h1>
<div class="row">
<div class="col-lg-5 mb-lg-0 mb-4">
  <div class="card">
        <div class="card-body">
          <div class="header">
            <h3 class="mt-2"><i class="fas fa-envelope"></i> Write to us:</h3>
          </div>
            <!-- Body -->

          <div class="md-form">
            <i class="fas fa-user prefix"></i>
            <label for="form-name">Your name :</label>
            <input type="text" id="form-name" class="form-control">
          </div>
          <div class="md-form">
            <i class="fas fa-envelope prefix"></i>           
            <label for="form-email">Your email :</label>
            <input type="text" id="form-email" class="form-control">
          </div>
          <div class="md-form">
             <i class="fas fa-tag prefix"></i>
            <label for="form-Subject">Subject :</label>
            <input type="text" id="form-Subject" class="form-control">
          </div>
          <div class="md-form">
            <i class="fas fa-pencil-alt prefix"></i>            
            <label for="form-text">Send message :</label>
            <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
          </div>
          <div class="text-center">
            <br>
            <button class="btn btn-secondary btn-lg btn-block">Submit</button>
          </div>
        </div>
      </div>
    </div>
  <div class="col-lg-7">
      <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2246.1467838499525!2d9.885202758051514!3d37.2351012931395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2stn!4v1575828790127!5m2!1sen!2stn" frameborder="0"
          style="border:0" allowfullscreen></iframe>
      </div>
        </div>
    </div>
 </div>
</section>

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