<?php 

     require 'config.php';
    
    

    $con = mysqli_connect($servername, $username, $password, $db);
     
   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://bootswatch.com/3/cosmo/bootstrap.min.css'>
    <title>MaxiBlog</title>
</head>
<body>
   
<?php include './header/navBar.php'; ?>

<div class='container'>
    
    <h2>Add Post Here</h2>
    <form>
        <div class='form-group'>
            <label>Title</label>
            <input type='text' name='title' class='form-control'>
        </div>
        <div class='form-group'>
             <label>Author</label>
            <input type='text' name='name' class='form-control'>

        </div>
        <div class='form-group'>
             <label>Text</label>
            <textarea name='body' class='form-control'></textarea>

        </div>
    </form>
</div> 
</body>
</html>
