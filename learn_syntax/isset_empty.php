<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset_empty.php" method="post">
        <label>User Name: </label>
        <input type="text" name="user"> <br> <br>
        <label>Password: </label>
        <input type="password" name="password"> <br> <br>
        <input type="submit" value="Log In" name="login">
    </form>
</body>
</html>




<?php

    //isset() == return TRUE if a var. is declared and not null
    //empty() == return TRUE if a var. not declared, false, null, ""

    //$username = "user";
    //$username = " ";
    //$username = true;
    $username = false;

    if(isset($username)){
        echo "The variable is set. <br>";
    }
    else{
        echo "This variable is NOT set. <br>";
    }

    //$food = "Pizza";
    //$food = "";
    //$food = true;
    $food = false;

    if(empty($food)){
        echo "This variable is empty. <br>";
    }
    else{
        echo "This variable is NOT empty. <br> <br>";
    }
/* ---------------------------------------------------------------------*/

    // foreach($_POST as $key=>$value){
    //     echo "$key = $value <br>";
    // }

    if(isset($_POST["login"])){

        $user = $_POST["user"];
        $pswd = $_POST["password"];

        if(empty($user)){
            echo "Enter the username. <br>";
        }
        elseif(empty($pswd)){
            echo "Enter the password. <br>";
        }
        else{
            echo "Hello, $user";
        }
        
    }
    

?>