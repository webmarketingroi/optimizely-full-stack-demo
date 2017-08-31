<?php 

session_start();

$identity = isset($_SESSION['identity'])?$_SESSION['identity']:null;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Cakes &amp; Bread</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta content='text/html;charset=utf-8' http-equiv='content-type'>
        <link href='img/favicon.ico' rel='shortcut icon' type='image/x-icon'>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/style.css" media="all" rel="stylesheet" type="text/css" />                
    </head>
    <body>
    <div class="container">
	  <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Cakes &amp; Bread</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Cakes &amp; Bread</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>              
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <?php if (!$identity): ?>
                <li><a href="login.php">Login</span></a></li>
              <?php else: ?>
              <li class="dropdown">                
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['identity'] ?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="logout.php">Logout</a></li>                  
                </ul>                                
              </li>
              <?php endif; ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

          <h1>Thank's For Shopping!</h1>
          <a class="btn btn-primary btn-lg" href="index.php">Back to Shop</a>
    </div>  

    <!-- jQuery-->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap-->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>

