
<?php
    include("newdatabase.php");

    $username = "Perera";
    $password = "perera123";
  
    // hide the original password
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (user, password)
            VALUES ('$username', '$hash')";


    try{
        mysqli_query($conn, $sql);
        echo "Users registered";
    }
    catch(mysqli_sql_exception){
        echo "could not register";
    }
    

    mysqli_close($conn);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hellow <br>
</body>
</html>