<?php include('server1.php') ?>



<!DOCTYPE html>
<html>
<head>
  <title>LOGIN MANAGER</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" href="../download.jpg" type="image/gif" sizes="17x17">
</head>
 <div class="headr"><marquee><p>WE LEAD LEADERS,TRAVEL WITH US TODAY</p></marquee>
  </div>

 <div id="navbar">
  <a href="../index.php">Home</a>
  <a href="alert.php">News</a>
  
  <a href="alert.php">book ticket</a>
  <a href="cashier/car.php">rent car</a>
  <a href="alert.php">speak to us</a>
  
  

  <a href="">change interface</a>
 <a href="alert.php">Contact</a>
 <a class="active" href="#" >login</a>
   
  
   <?php  if (isset($_SESSION['name'])) : ?>
    
      
      <a href="index.php?logout='1'" style="color: red;">logout</a> 
     <a href="index.php?logout='1'" style="color: red;">home</a> 
 
    
    <?php endif ?>

</div>
<body style="background-color:blue;" >
  <img src="../down.jpg" height="3%" width="50px">

    
  <div class="header">
  	<h2>Login as manager</h2>
  </div>
	 
  <form method="post" action="login1.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		 <a href="pass.php"><font color="red">forgot pass?</font></a>
  	</p>
  </form>
</body>
</html>
