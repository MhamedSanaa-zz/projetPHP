<?php
include 'product.phtml';
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