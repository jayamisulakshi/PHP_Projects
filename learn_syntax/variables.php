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

    //global variable and local variable

    /* A var declared OUTSIDE a function has a GLOBAL SCOPE.
       Only can accessed outside a function. */

    $global_x = 5;  
    $p = 2;

    function test(){

        /* A var declared WITHIN a function. Only accessed within that func. */ 
        $local_x = 10;

        /* All global var store in an array called $GLOBALS[index].
           index -----> the name of the var.   */

        global $p, $global_x; // 'global' keyword used to access a glob. var. from within a func. 

        // $GLOBALS['p'] =  $GLOBALS['p'] + $GLOBALS['global_x']
        $p = $p + $global_x;
        
        echo "Local x is $local_x <br>";
        echo "p is $p <br>";
    }

    test();
    echo "Global x is $global_x <br>";
    echo "p is $p <br>";

    /* static keyword is used to keep the local var. value which need for 
    further job.  */

    function test1(){
        static $m = 0;
        echo $m;
        $m++;
    }

    /*Each time the function is called, that var still have the
     infor. it contained from the last time the function was called.*/

    test1(); // m=0
   
    test1(); // m=1
    
    test1(); //m=2
    
    test1(); //m=3
    



?>