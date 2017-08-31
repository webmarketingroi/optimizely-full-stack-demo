<?php 

if (isset($_POST['submit'])) {

	$email = $_POST['inputEmail'];
	$password = $_POST['inputPassword'];
	
	$validUsers = array(
		'james@webmarketingroi.com.au' => '123456',
		'oleg@webmarketingroi.com.au' => '4342423',
		'yvette@webmarketingroi.com.au' => 'wtrw2342'
	);
	
	if (isset($validUsers[$email]) && $validUsers[$email]==$password) {
		session_start();
		$_SESSION['identity'] = $email;
		// Redirect to dashboard
		header('Location: index.php');
	}	
}

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
	  <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Sign In</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button>
      </form>
    </div>  

    <!-- jQuery-->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap-->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
