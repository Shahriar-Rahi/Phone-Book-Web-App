<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Signup</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="container">
  <div class="h1">
  </div>

  <form class = "box" method="post" action="register.php">
  	<?php include('errors.php'); ?>

  	  <input type="text" name="username" placeholder = "Username" value="<?php echo $username; ?>">

  	  <input type="email" name="email" placeholder = "Email" value="<?php echo $email; ?>">
 
  	  <input type="password" name="password_1" placeholder = "Password">

  	  <input type="password" name="password_2" placeholder = "Confirm Password">

  	  <input type="submit" name="reg_user" placeholder = "Register">
  	<p style="color:white;">
  		Already have an account?<a href="login.php"><br>Sign in</a>
  	</p>
  </form>
</body>
</html>
