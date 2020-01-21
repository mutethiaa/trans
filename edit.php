

<?php
require('server1.php');
?>




<?php 

  //session_start(); 

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


<!DOCTYPE html>
<html>
<head>
<title>MANAGER HOME</title>
<link rel="icon" href="download.jpg" type="image/gif" sizes="17x17">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">

<style>
.mySlides {display:none;
}

.top{
  background-color: red;
  margin: 40%;
}h2{
  margin: 0%;
}

body {
  margin: 0;
  font-size: 28px;
  font-family: Arial, Helvetica, sans-serif;
  background-color: blue;
  color: white;
}

.header {
  background-color:blue;
  padding: 30px;
  text-align: center;
  font-size: 30%;
  margin:%;
  color:#00008B;
  font-family: Arial Black;
}

#navbar {
  overflow: hidden;
  background-color: #00BFFF;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #4CAF50;
  color: white;
}

textarea{
background-color: white;
color: red;


}
#mi{
  color: red;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}

</style>
</head>

<body>
  
  <div class="header"><marquee><h1>WE LEAD LEADERS,TRAVEL WITH US TODAY</h1></marquee>
  </div>

 <div id="navbar">
  <a href="manager.php">admin</a>
  
  <a href="news.php">News</a>
  <a href="register.php">register cashier</a>
  <a href="use.php" class="active">users</a>
  <a href="cars.php">cars</a>
  <a href="report.php">report</a>
   <a href="price.php">set price</a>
  
   
  
   <?php  if (isset($_SESSION['name'])) : ?>
    
      
      <a href="index.php?logout='1'" style="color: red;">logout</a> 
     <a href="index.php?logout='1'" style="color: red;">home</a> 
 
    
    <?php endif ?>

</div>
</p>

      

    
    

<div class="content">
    
  
  
 
   

</div>
</p>

  

      </a> </p>

      

    
    

<div class="content">




<?php
//require('server1.php');
//include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from cashier where id='".$id."'"; 
$result = mysqli_query($db, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

<h1>edit user</h1>

<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];

$name =$_REQUEST['name'];
$age =$_REQUEST['age'];
$telephone =$_REQUEST['telephone'];
$update="update cashier set
username='".$name."', email='".$age."',telephone='".$telephone."' where id='".$id."'";



mysqli_query($db, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='use.php'>View new details</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter Name" 
required value="<?php echo $row['username'];?>" /></p>
<p><input type="text" name="age" placeholder="Enter Age" 
required value="<?php echo $row['email'];?>" /></p>
<p><input type="text" name="telephone" placeholder="Enter Age" 
required value="<?php echo $row['telephone'];?>" /></p>

<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
	





<script>

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>
</html>




 






















</body>
</html>
