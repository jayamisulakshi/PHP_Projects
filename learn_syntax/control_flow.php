<?php

    $age = -50;
    $adult = true;

    if ($age >= 100){
        echo "You are too old...<br>";
    }
    elseif ($age >= 18){
        echo "You are eligible to enter.<br>";
    }
    elseif ($age == 0){
        echo "Just born babies not allow to enter.<br>";
    }
    else{
        echo "Enter valid age value.<br>";
    }

    if($adult){
        echo "You can enter..<br>";
    }
    else{
        echo "You can not enter..<br>";
    }

    /* -------------------------- Logical Operators ---------------------------
    
    Logical operators ===== combine conditional statements
    
    if(condition1 && condition2)

    && === AND , True if both conditions are true
    || === OR
    ! === NOT , True if false. False if true.
    
    */


    // -----------------------------------------------------------

    // Switch = replacement to using many elseif statements
            // more efficient, less code to write. 

    
    $grade = "A";

    if ($grade == "A"){
        echo "Best <br>";
    }
    elseif ($grade == "B"){
        echo "Better <br>";
    }
    else{
        echo "Good <br>";
    }

    // instead of using this,

    switch($grade){
        case "A":
            echo "You did Best <br>";
            break;
        
         case "B":
            echo "You did Better <br>";
            break;
    
         case "C":
            echo "You did Good <br>";
            break;

        default: // if there is no any matching case, this will execute.
            echo "$grade is not valid.";
    }

    // for loop === repeat same code a certain # of times. 

    for ($i=0; $i <5; $i++){
        echo "$i <br>";
    }

    // while loop === do some ode infinitely while some condition remains true

    $counter = 0;

    while($counter<=5){
        
        echo "$counter <br>";
        $counter++;
    }
?>