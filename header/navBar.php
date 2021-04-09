<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    body {
        font-size: 15px;
    
    }
    .navbar-brand {
      font-size: 25px; 
      font-weight: 800; 
      margin: 20px 0px 0px 40px;
    }
    .nav-link{
        margin-left: 20px;
        cursor: pointer;
    }
    button {
        margin-right: 20px;
    }
    
</style>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
  <a class="navbar-brand" href="#">MaxiBlog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse collapse show" id="navbarColor01" style="">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" onclick="location.href='index.php'">Home
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="location.href='addPost.php'">Add Post</a>
      </li>
    </ul>
  
  </div>
</nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>