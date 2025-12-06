<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio_checkbox.php" method="post">
        <input type="radio" name="credit_card" value="Visa">Visa <br>
        <input type="radio" name="credit_card" value="Master">Master <br>
        <input type="radio" name="credit_card" value="American Express">American Express <br> <br>
        <input type="submit" value="confirm" name="confirm"> <br> <br>

        <input type="checkbox" name="foods[]" value="Pizza"> Pizza <br>
        <input type="checkbox" name="foods[]" value="Burger"> Burger <br>
        <input type="checkbox" name="foods[]" value="Hotdog"> Hotdog <br>
        <input type="checkbox" name="foods[]" value="Lava Cake"> Lava Cake <br><br>
        <input type="submit" value="Order" name="Order">

    </form>
</body>
</html>
<?php

    if(isset($_POST["confirm"])){
        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
            echo "$credit_card";
        }
        else{
            echo "Select a credit card type.";
        }
    }

    // code will be lengthy bcz of using different names...
    
    // if(isset($_POST["Order"])){

    //     if(isset($_POST["Pizza"])){
    //         echo "You have ordered {$_POST["Pizza"]}";
    //     }
    //     elseif(isset($_POST["Burger"])){
    //         echo "You have ordered {$_POST["Burger"]}";
    //     }
    //     elseif(isset($_POST["Hotdog"])){
    //         echo "You have ordered {$_POST["Hotdog"]}";
    //     }
    //     elseif(isset($_POST["Lava Cake"])){
    //         echo "You have ordered {$_POST["Lava Cake"]}";
    //     }
    // }


    if(isset($_POST["Order"])){
        $foods = $_POST["foods"];

        foreach($foods as $food){
            
            switch($food){
                case "Pizza":
                    echo "You have ordered $food <br>";
                    break;
                case "Burger":
                    echo "You have ordered $food <br>";
                    break;
                case "Hotdog":
                    echo "You have ordered $food <br>";
                    break;
                case "Lava Cake":
                    echo "You have ordered $food <br>";
                    break;
        
            }
        }
    }

?>