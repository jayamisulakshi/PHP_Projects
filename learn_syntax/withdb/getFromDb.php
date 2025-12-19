<?php

    include("newdatabase.php");

    $sql = "SELECT * FROM users"; //WHERE user = 'Bob' ";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){ //checking whether there are rows returned
        while ($row = mysqli_fetch_assoc($result)){ //fetching rows one by one as associative arrays
            echo $row['id'] . "<br>"; //accessing columns by their names
            echo $row['user'] . "<br>";
            echo $row['reg_date'] . "<br>";
        }; //fetching a single row
        
    }
    else{
        echo "No results found.";
    }

    mysqli_close($conn);

?>