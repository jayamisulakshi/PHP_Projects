<?php
    echo "Variables in PHP <br> <br> <br>";

    $name = "Nick";
    $city = "Colombo";
    $food = "pancake";

    echo "$name is from $city. He likes to eat $food. <br>";

    $quantity = 3;
    $price = 15;
    $total = null;
    
    echo "$name ordered $quantity {$food}s. Each $food costs Rs.$price. <br>";
    $total = $quantity * $price;
    echo "The total price is Rs. $total. <br>";

    $is_ordered = true;
    $delivered = false;

    echo "The shop checked the order status. It shows $is_ordered (it's true, that's why it shows 1 here.) for ordered and $delivered (it's false that's why it show nothing) for delivered. <br>";

?>