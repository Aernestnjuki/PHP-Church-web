<?php

    // $host = 'localhost';
    // $user = 'root';
    // $pass = '';
    // $db_name = 'AwesomeChurch';

    // $conn = new mysqli($host, $user, $pass, $db_name);

    // if($conn->connect_error){
    //     die('Database Connection Error:' . $conn->connect_error);
    // }



    //Get Heroku ClearDB connection information
    $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $cleardb_server = $cleardb_url["host"];
    $cleardb_username = $cleardb_url["user"];
    $cleardb_password = $cleardb_url["pass"];
    $cleardb_db = substr($cleardb_url["path"],1);
    $active_group = 'default';
    $query_builder = TRUE;
    // Connect to DB
    $conn = new mysqli($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

    if($conn->connect_error){
        die('Database Connection Error:' . $conn->connect_error);
    }
?>