<?php include('server1.php') ?>

<?php 



  if (!isset($_SESSION['name'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login1.php');
  }
  
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['name']);
    header("location: login1.php");
  }
?>

     
</body>
</html>
<!DOCTYPE html>
<html>
<head>

  <title>Registration form</title>
  <link rel="icon" href="../download.jpg" type="image/gif" sizes="17x17">
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body style="background-color: blue;">
    <div class="headr"><marquee><p>WE LEAD LEADERS,TRAVEL WITH US TODAY</p></marquee>
  </div>

 <div id="navbar">
  <a href="manager.php" >admin</a>
  
  <a href="news.php">News</a>
  <a href="register.php" class="active">register cashier</a>
  <a href="use.php">users</a>
  <a href="cars.php">cars</a>
  <a href="report.php">report</a>
   <a href="price.php">set price</a>
   
  
   <?php  if (isset($_SESSION['name'])) : ?>
    
      
      <a href="index.php?logout='1'" style="color: red;">logout</a> 
     <a href="index.php?logout='1'" style="color: red;">home</a> 
 
    
    <?php endif ?>

</div>
  
  <div class="header">
  	<h2>Register</h2>
  </div>

	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" minlength="10">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
      <div class="input-group">
  <label>Telephone</label>
  <input type="number" name="telephone" size="4" maxlength="6"   value="<?php echo $telephone; ?>">
</div>
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>


  	<p>
  		
  	</p>
  </form>
</body>
</html>