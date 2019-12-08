<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wpidth=device-wpidth, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Order Management</title>
</head>
<body>
    <div class="container py-3">
        <div class="jumbotron text-center">
            <h3>List of orders</h3>
        </div>
        <?php if (isset($_GET['notif'])): ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php
                    if ($_GET['notif'] == 'add') echo 'Product added';
                    if ($_GET['notif'] == 'update') echo 'Product modified';
                    if ($_GET['notif'] == 'delete') echo 'Product deleted';
                ?>
            </div>
        <?php endif ?>
        <br>
        <br>
        <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Order Status</th>
                    <th>Order Vehicle ID</th>
                    <th>Unassign</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'classes/order.class.php';

                    $order = new Order;
                    $listorders = $order->readAllorders();
                    $data = $listorders->fetchAll(); 
                    foreach($data as $orderData):
                    if ($orderData['deliverystatus']==1):?>
                        <tr>
                            <td>
                            <?= $orderData['oid'] ?>
                            </td>   
                            <td>
                            Deliverying
                            </td>   
                            <td>
                            <?= $orderData['vid'] ?>
                            </td>   
                            <td>
                                <a href='unassign.php?oid=<?= $orderData['oid'] ?>' class="btn btn-success">Done</a>&nbsp;&nbsp;
                            </td>
                        </tr>
                        <?php
                    elseif($orderData['deliverystatus']==0):
                        ?>
                            <tr>
                            <td>
                            <?= $orderData['oid'] ?>
                            </td>   
                            <td>Onhold</td>   
                            <td>Queued for vehicle</td>   
                            <td></td>
                        </tr>
                    <?php endif; endforeach ?>
    
    
            </tbody>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
