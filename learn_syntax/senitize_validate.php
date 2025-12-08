<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="senitize_validate.php" method="post">
        Username: <br>
        <input type="text" name="username"> <br>
        Age: <br>
        <input type="text" name="age" > <br>
        Email: <br>
        <input type="email" name="email"> <br> <br>
        <input type="submit"  name="submit" value="submit">
    </form>
</body>
</html>

<?php

    if(isset($_POST["submit"])){

        /*filter function has 3 var. (INPUT_POST or INPUT_GET, variable,
                                      FILTER_SANITIZE_....) */

        // $username = filter_input(INPUT_POST, "username",
        //                         FILTER_SANITIZE_SPECIAL_CHARS);
        // //echo "Hello, $username <br>";

        // $age = filter_input(INPUT_POST, "age",
        //                     FILTER_SANITIZE_NUMBER_INT);
        // //echo "You are $age years old. <br>";

        // $email = filter_input(INPUT_POST, "email",
        //             FILTER_SANITIZE_EMAIL);
        // echo "Your email is, {$email} <br>";

        //validate

        $age = filter_input(INPUT_POST, "age",
                            FILTER_VALIDATE_INT);

        if(empty($age)){
            echo "That wasn't valid. <br>";
        }
        else{
            echo "You are $age years old. <br>";
        }

        $email = filter_input(INPUT_POST, "email",
                             FILTER_VALIDATE_EMAIL);
        
         if(empty($email)){
            echo "That wasn't valid. <br>";
        }
        else{
            echo "Your email is, $email <br>";
        }                    
        
    }

?>