<?php

include "product.php";
include "order.php";

$product1 = new Product();
//using magic method setter
$product1->product_id = 118;
$product1->product_name = "Hawaiian";
$product1->product_qty = 2;
$product1->product_price = 14.59;

$product2 = new Product();
$product2->product_id = 119;
$product2->product_name = "Supreme";
$product2->product_qty = 3;
$product2->product_price = 17.99;


$order1 = new Order();
$order1->order_id = 6577601;
$order1->order_products = array($product1, $product2);
$order1->order_cost = 0;

//1. Order ID
//using magic method getter
echo "Order ID: " . $order1->order_id . "<br><br>";

//2. Get Products in order
foreach ($order1->order_products as $array_key => $selected_product) 
{
    echo "Product ". ($array_key+1). "<br>"; //array strats at 0, so added 1

    //this will not work because the object properties are private
    //this will print only public properties
    //use var_dump or print_r to see object properties
    // foreach ($selected_product as $key => $value) {
    //     echo "$key => $value\n";
    // }

    //this will work
    //echo $selected_product->product_name;

    print_r($selected_product);
    echo "<br><br>";
}





//3. Print out to user through html
echo '

<style>
table, th, td {
  border: 1px solid black;
}
</style>


<h2>Order Summary</h2>

<table style="width:100%">
  <tr>
    <th>S. No</th>
    <th>Product</th> 
    <th>Price</th>
    <th>Quantity</th> 
    <th>Cost</th>
  </tr>';

foreach ($order1->order_products as $array_key => $selected_product) 
{
    echo '<tr>';

    echo '<td>' . ($array_key + 1) . "</td>"; //array strats at 0, so added 1
    echo '<td>' . $selected_product->product_name . "</td>";
    echo '<td>' . $selected_product->product_price . "</td>";
    echo '<td>' . $selected_product->product_qty . "</td>";
    echo '<td>' . $selected_product->product_price * $selected_product->product_qty . "</td>";

    echo '</tr>';

}

echo '</table>';

//4. Calculate order cost
$order1->Calc_order_cost();
echo "<h3>Total Cost $" . $order1->order_cost. "</h3>";

// print_r($order1);
// echo "<br><br>";





?>