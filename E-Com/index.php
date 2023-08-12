<?php
//noramlly this data would have been fetched from a database.
//for simplicity i am just declaring an array.
$products = [
    1 => ['name' => 'Product 1', 'price' => 10.00],
    2 => ['name' => 'Product 2', 'price' => 20.00],
    3 => ['name' => 'Product 3', 'price' => 30.00],
];

//utility function
function calculate($productIds)
{
    global $products;
    
    //initiating price;
    $totalPrice = 0;

    foreach ($productIds as $productId)
     {
        if (isset($products[$productId])) 
        {
            $price = $products[$productId]['price'];

            $totalPrice += $price;
        }
    }

    return $totalPrice;
}




?>