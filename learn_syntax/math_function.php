<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math_function.php" method="post">
        <label>x: </label>
        <input type="text" name="x"> <br> <br>
        <label>y: </label>
        <input type="text" name="y"> <br> <br>
        <label>z: </label>
        <input type="text" name="z"> <br> <br>
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php 
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];


    $total = null;

    //$total = abs($x); // give the absolute value -3 ==> 3
    //$total = round($x); // give the rounded value. 8.66 ==> 9 
    // round($x, 2) this will round the number up to 2 digit.
    //$total = floor($x); // rounded down
    //$total = ceil($x); // always round up
    //$total = sqrt($x); // squre root

    //$total = pow($x,$y); // x**y

    //$total= max($x, $y, $z); //maximum number amoung those  3 values
    //$total= min($x, $y, $z);  // minimum number

    //$total = pi(); //pi function ===> 3.1415...
    $total = rand(1, 10); // give random number (min number, max number)


    echo $total . "<br>";




    // ---------------------------------------------------------------------------- //
    // hashing === transforming sensitive data(password) into 
    //             letters, numbers, and/or symbols via a mathematical process.
    //             similar to encryption, hide the original data from 3rd parties.

    $password = "password";
    $hash = password_hash($password, PASSWORD_DEFAULT);
    if(password_verify("entered password", $hash)){
        echo "Login successful";
    } else {
        echo "Login failed";
    }
?>