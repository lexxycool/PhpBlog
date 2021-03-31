<?php
   
    require 'config.php';

    $id = $_GET['id'];

    $con = mysqli_connect($servername, $username, $password, $db);
    
    $query = 'SELECT * FROM usersTable WHERE id ='.$id;
    
    $result = mysqli_query($con, $query);

    $post = mysqli_fetch_assoc($result);
    

    mysqli_free_result($result);

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
            a {
               margin: 20px; 
               
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <a class='btn btn-primary' onclick="location.href='index.php'">Go Back</a>
            <h1>MaxiBlog</h1>
                <div class='well'>
                    <h2><?php echo $post['title']; ?></h2>
                    <h6>created at <?php echo $post['date']; ?> by <?php echo $post['name']; ?></h6>
                    <p><h4><?php echo $post['body']; ?></h4></p>   
                </div>
        </div> 
    </body>
</html>