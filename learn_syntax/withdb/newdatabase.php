<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass ="";
    $db_name = "businessdb";
    $conn = "";

    
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    //PHP errors and warnings are separate from exceptions.
    //mysqli_report() -----> This is a PHP function that controls how MySQLi reports errors.
    //MYSQLI_REPORT_ERROR | -----> When set, MySQLi will report errors (instead of staying silent)
    // MYSQLI_REPORT_STRICT -----> This is the key part: it makes MySQLi throw exceptions instead of warnings
                                //  Without this, MySQLi functions return 'false' and show warnings

        /* MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT means:

                o. Report all errors
                o. Throw them as exceptions (not warnings) */



    try{
        $conn = mysqli_connect($db_server,
                                $db_user,
                                $db_pass, 
                                $db_name);
    }
    catch(mysqli_sql_exception) {
        echo "Failed to connect. <br>";
    }



?>