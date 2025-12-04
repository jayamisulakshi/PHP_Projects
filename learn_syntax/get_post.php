
        <!-- $_GET, $_POST = special variables used to collect
                    data from an HTML form. 
        $_GET = Data is appended to the url
                NOT SECURE
                GET request can be cached
                Better for a search page

        $_POST = Data is packaged inside the body of the HTTP req.
                MORE SECURE
                no data limit
                GET req. are not cached
                Better for submitting credentials -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get_post.php" method="post">
        <label>username: </label> <br>
        <input type="text" name="username"> <br>
        <label>password: </label> <br>
        <input type="password" name="password"> <br> <br>
        <input type="submit" value="Log In">

    </form>

</body>
</html>

<?php 

    // method = get: 

    // echo "{$_GET["username"]} <br>"; 
    // // echo $_GET["username"] . "<br>";
    // echo "{$_GET["password"]} <br>";

    // method = post:

    echo "{$_POST["username"]} <br>"; 
    // echo $_GET["username"] . "<br>";
    echo "{$_POST["password"]} <br>";

?>