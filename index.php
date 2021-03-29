<?php

    //import the config file
    require 'config.php';

    /*
        have already created my database 'myBlog' and table 'usersTable'
        using phpMyAdmin
    */
    //create a connection
    $con = mysqli_connect($servername, $username, $password, $db);

    //check the connection
    /*
    if($con) {
        echo 'Connection Successful';
    }else {
        echo 'Connection Failed:' . mysqli_connect_error();
    };
    */

    //create a query 
    $query = 'SELECT * FROM usersTable';
    $result = mysqli_query($con, $query);

    //check for database connection
    /* 
    if($result) {
        echo 'Database connection Successful';
    }else {
        echo 'Database Connection Failed:' . mysqli_error($con);
    }*/

    //fetch all data from the database
    $post = mysqli_fetch_all($result, MYSQLI_ASSOC);
    var_dump($post);
        
    //free result set
    mysqli_free_result($result);

    //close connection
    mysqli_close($con);
   


?>