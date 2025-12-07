<?php

    // function === write some code once, reuse when needed.
    // type () after function name to invoke
    // ex> add() substract() multiply() divide()....

    function wishes($name, $age){
        echo "Happy birthday $name <br>";
        echo "Wish you all the best. <br>";
        echo "Cheers to $age <br> <br>";
    }

    wishes("Perera", 52);
    wishes("Lakmali", 51);

    function add(int $a, int $b){
        $c = $a + $b;
        return $c;
    }

    echo add(5,6) . "<br>";


    //string functions....

    $username = "The User Name";
    $phone = "123-456-7890";


    //$username = strtolower($username);
    //$username = strtoupper($username);
    //$username = trim($username); //remove any white space before/ after the string
    //$username = str_pad($username, 20, "0"); //9var, number of chara. , with wht)
    //$username = str_replace("-", "", $phone);  //(replace item, replace to wht, the variable)
    //$username = strrev($username);
    //$username = str_shuffle($username);
    
    //$equals = strcmp($username, "user name"); //string compaire === if bothe same(0), if not (1/ -1)
    //echo $equals;

    // $counter = strlen($username);
    // echo $counter;

    // $index = strpos($username, " ");  // check the position of something within the variable
    // $index = strpos($phone, "-");
    // echo $index . "<br>";

    // $firstname  = substr($username, 0, 4);
    // echo $firstname . "<br>";

    $fullname = explode(" ",$username); // create an array by adding the value of the variable. 
    foreach($fullname as $fname){
        echo $fname . "<br>";
    }

   // echo $username . "<br>";
    //echo $phone;

?>