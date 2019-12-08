<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wpidth=device-wpidth, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Vehicle  management</title>
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
    <div class="container py-3">
        <div class="jumbotron text-center">
            <h3>List of Vehicles </h3>
        </div>
        <?php if (isset($_GET['notif'])): ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php
                    if ($_GET['notif'] == 'add') echo 'Vehicle  added';
                    if ($_GET['notif'] == 'update') echo 'Vehicle  modified';
                    if ($_GET['notif'] == 'delete') echo 'Vehicle  deleted';
                ?>
            </div>
        <?php endif ?>
        <br>
        <a href="createveh.php" id="mybtn" class="btn btn-block">New Vehicle </a>
        <br>
        <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Vid</th>
                    <th>Status</th>
                    <th>Vehicle number</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'classes/vehicle.class.php';
                    $vehicle  = new Vehicle ;
                    $listvehicles  = $vehicle ->readAllvehicles();
                    $data = $listvehicles->fetchAll(); 
                    foreach($data as $vehicleData):
                        if ($vehicleData['status']==1):?>
                   
                        <tr>
                            <td><?= $vehicleData['vid']; ?></td>   
                            <td>Vehicle available</td>   
                            <td><?= $vehicleData['vehiclenumber'] ?></td>
                            <td>
                                <a href='editveh.php?vid=<?= $vehicleData['vid'] ?>' class="btn btn-outline-warning">Edit</a>&nbsp;&nbsp;
                                <a href='deleteveh.php?vid=<?= $vehicleData['vid'] ?>' class="btn btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                        <?php
                    elseif($vehicleData['status']==0):
                        ?>
                        <tr>
                            <td><?= $vehicleData['vid']; ?></td>   
                            <td>Vehicle unavailable </td>   
                            <td><?= $vehicleData['vehiclenumber'] ?></td>
                            <td>
                                <a href='editveh.php?vid=<?= $vehicleData['vid'] ?>' class="btn btn-outline-warning">Edit</a>&nbsp;&nbsp;
                                <a href='deleteveh.php?vid=<?= $vehicleData['vid'] ?>' class="btn btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                   <?php endif; endforeach ?>
            </tbody>
        </table>
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
