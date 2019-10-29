<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="container">
  <div class="h1">
  </div>

  <form class = "box" method="post" action="login.php">
  	<?php include('errors.php'); ?>
  		<input type="text" name="username" placeholder = "Username">
  		<input type="password" name="password" placeholder = "Password">
  		<input type="submit" name="login_user" placeholder = "Login">
  	<p style="color:white;">
	   Don't have an account?<a href="register.php"><br>Sign up</a>
  	</p>
  </form>
</body>
</html>
