<?php

session_start();
$products_ids=array();
if (filter_input(INPUT_POST,'add_cart'))
{
  if(isset($_SESSION['shopping_cart']))
  {
   $count=count($_SESSION['shopping_cart']);
   $products_ids=array_column($_SESSION['shopping_cart'],'id');
 if (!in_array(filter_input(INPUT_GET,'id'), $products_ids))
 {
   $_SESSION['shopping_cart'][$count]=array
   (
    'pid'=> filter_input(INPUT_GET,'id'),
    'name'=> filter_input(INPUT_POST,'name'),
    'price'=> filter_input(INPUT_POST,'price'),
    'quantity'=>filter_input(INPUT_POST,'quantity'),
   );
 }
 else 
 {
   for ($i=0;$i<count($products_ids);$i++)
   {
     if ($products_ids[$i]==filter_input(INPUT_GET,'id'))
     {
       $_SESSION['shopping_cart'][$i]['quantity']+=filter_input(INPUT_POST,'quantity');
     }
   }
 }
  }
  else 
  {
    $_SESSION['shopping_cart'][0]= array
    (
      'pid'=> filter_input(INPUT_GET,'id'),
      'name'=> filter_input(INPUT_POST,'name'),
      'price'=> filter_input(INPUT_POST,'price'),
      'quantity'=>filter_input(INPUT_POST,'quantity'),
    );
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<?php
include 'classes/product.class.php'; 
$cart = new product;
$products=$cart->getdata();

?>
   <div class="container">
   <div class="row">
  <?php
  foreach ($products as $product):
    echo "<div class='col-md-6'>";
  ?>
  <form method="post" action="product.php?id=<?php echo $product->pid; ?>">
  <div class="form-group">
    <img src="<?php echo $product->file; ?>" alt="error" >
    <h4><?php echo $product->name; ?></h4>
    <span class="text-info"><?php echo $product->description; ?></span>
    <h4 class="form-control"><?php echo $product->price; ?> TND</h4>
    <input type="hidden" name="name" value="<?php echo $product->name; ?>">
    <input type="hidden" name="price" value="<?php echo $product->price; ?>">
    <input type="number" name="quantity" value="1">
    <input type="submit" name="add_cart" value="add to cart" class="btn btn-info">
  </div>
  </form>
  <?php 
echo "</div>";
endforeach; ?>
   </div>
   <table>
   <tr><th><h1> order details</h1></th></tr>
   <th>product name</th>
   <th>quantity</th>
   <th>price</th>
   <th>total</th>
   <?php
    
   if (!empty ($_SESSION['shopping_cart'])):
    $total=0;
    foreach($_SESSION['shopping_cart'] as $key=>$produit):
   ?>
  <tr>
  <td><?php echo $produit['name']; ?></td>
  <td><?php echo $produit['quantity']; ?></td>
  <td><?php echo $produit['price']; ?></td>
  <td><?php echo $produit['quantity']* $produit['price']; ?></td>
  </tr>
    <?php 
    
    $total += $produit['quantity']* $produit['price'];
  endforeach; ?>
  <tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "TND".$total; ?></strong>
</td>
</tr>
<?php 
endif;
   ?>

   </table>
   </div>
</body>
</html>