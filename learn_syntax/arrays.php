<?php

    //array === "variable" which can hold more than 1 value at a time.

    $foods = array("apple", "banana", "mango", "grapes");


    //$foods[0] = "pineapple";
    //array_push($foods, "pineapple", "coconut");
    //array_pop($foods); //remove the last element. 
    //array_shift($foods); //remove the first element and others shift over by 1
    //$foods = array_reverse($foods);

    echo count($foods) . '<br>';


    // every food in foods. for loop also can use.
    foreach($foods as $food){
        echo "$food <br>";
    }

    // associative array === An array made of key=>value pairs
    
    // countries => capitals , id => username , item =>price

    $capitals = array("USA"=>"Washington D.C", 
                      "Japan"=>"Kyoto", 
                      "South Korea"=>"Seoul", 
                      "India"=>"New Delhi");

    echo $capitals["USA"] . '<br>';
    //$capitals["USA"] = "Las Vegas"; //update key-value pair
    //$capitals["China"] = "Beijing"; //add new key-value pair
    //array_pop($capitals); //remove last pair
    //array_shift($capitals);  //remove first pair

    foreach($capitals as $key => $value){
        echo "$key ---> $value <br>";
    }

    $keys = array_keys($capitals); //access only keys

    foreach($keys as $key){
        echo "$key <br>";
    }

    $values = array_values($capitals); //access only values

    foreach($values as $value){
        echo "$value <br>";
    }

    $capitals = array_flip($capitals); //switch the key and value

    foreach($capitals as $key => $value){
        echo "$key ---> $value <br>";
    }

    $rev_capitals = array_reverse($capitals); //reverse the array

    foreach($rev_capitals as $key => $value){
        echo "$key ---> $value <br>";
    }

    echo count($capitals);



?>