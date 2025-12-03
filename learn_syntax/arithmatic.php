<?php

    //Arithmatic Operators

    $x = 3;
    $y = 2;
    $z = null;

    //$z = $x + $y;  
    //$z = $x - $y;
    //$z = $x * $y;
    //$z = $x / $y;
    //$z = $x ** $y;
    $z = $x % $y;    

    echo "$z <br>";

    //Increment and Dicrement Operators

    $counter = 0;

    $counter = $counter +1;
    $counter++;
    $counter += 4;
    echo "$counter <br>";

    //Operator Precedence 
    // 1. () , 2. ** , 3. * or % or / , 4. + or -

    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo $total;


?>