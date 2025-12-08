<!-- include() = copies the content of a file(php/ html/ text)
            and includes it in the php file.
            selections of our website become reusable
            changes only need to be made in one place. -->

<?php
    include("header.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the home page of the website.  
    <br>
    <br>
</body>
</html>

<?php
    include("footer.html");
?>