<?php 
include 'classes/order.class.php';


$order = new order;


if (!empty($_POST)){
    $v=$_POST['res'];
    $order->changee($v);
    $order->fassign($v);
    $order->fassignn($v);
    header('Location:admintable.php');
    
   

    exit();
    
    

} else {
$order->change($_GET['oid']);
$showorder = $order->showOneorder($_GET['oid']);
$data = $showorder->fetch();
}
 ?>  
 <form name="myform" action="" method="post">
 <input type="hidden" value="<?= $data['vid'] ?>" name="res" id="Form">
 <script type="text/javascript">
    document.myform.submit();
</script>

 
 </form>
