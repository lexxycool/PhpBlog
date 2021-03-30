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
 
        
    //free result set
    mysqli_free_result($result);

    //close connection
    mysqli_close($con);
   

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='https://bootswatch.com/3/cosmo/bootstrap.min.css'>
        <title>MaxiBlog</title>
        <style>
            h1 {
                color: gray;
                text-align: center;
                margin: 40px 0px 40px;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1>MaxiBlog</h1>
            <?php foreach ($post as $posts): ?>
                <div class='well'>
                    <h2><?php echo $posts['title']; ?></h2>
                    <h6>created at <?php echo $posts['date']; ?> by <?php echo $posts['name']; ?></h6>
                    <p><h4><?php echo $posts['body']; ?></h4></p>
                    <a href=''>Read More</a>
                </div>
            <?php endforeach; ?>
        </div>    
            
    </body>
</html>