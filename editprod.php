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
    <?php
        include './classes/produit.class.php';
        $produit = new Produit;
        if (!empty($_POST)) {
            $produit->updateproduit($_POST['pid'], $_POST['name'], $_POST['description'], $_POST['price'], $_POST['file']);
            header('Location:indexprod.php?notif=update');
            exit();
        } else {
            $showproduit = $produit->showOneproduit($_GET['pid']);
            $data = $showproduit->fetch();
        }
    ?>
    <div class="container py-3">
        <div class="jumbotron text-center">
            <h3>Update product</h3>
        </div>
        <fieldset>
            <legend>Update product N°<?= $_GET['pid'] ?></legend>
            <form action="" method="post" id="usrform">
                <input type="hidden" value="<?= $data['pid'] ?>" name="pid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" value="<?= $data['name'] ?>" required name="name" class="form-control" id="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" value="<?= $data['price'] ?>" required name="price" class="form-control" id="price">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" form="usrform"  class="form-control"><?= $data['description'] ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="file">File</label>
                            <input type="text" value="<?= $data['file'] ?>" name="file" id="file" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" id="mybtn" class="btn btn-block btn-block">Comfrim</button>
                    </div>
                    <div class="col-md-6">
                        <button type="reset" id="mybtn" class="btn btn-block btn-block">Cancel</button>
                    </div>
                </div>
            </form>
        </fieldset>
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