<?php
    $db_host = "localhost";
    $db_user = "test";
    $db_passwd = "test1234";
    $db_name = "test";
    $db_conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

    if ( mysqli_connect_errno($db_conn) ) {
        echo "Connecting to DB is failed".mysqli_connect_error();
    } else {
        echo "Connection to DB is success";
    }
?>