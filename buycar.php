

<?php
require('server1.php');
?>



<!DOCTYPE html>
<html>
<head>
<title>leader</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">

<style>


.top{
  background-color: red;
  margin: 40%;
}

body {
  margin: 0;
  font-size: 28px;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  background-color: #BA55D3;
  padding: 30px;
  text-align: center;
  font-size: 30%;
  margin:%;
  color:#7FFFD4;
  font-family: Arial Black;
}

#navbar {
  overflow: hidden;
  background-color: blue;
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
  
  <a href="alert.php">News</a>
  <a href="register.php">register cashier</a>
  <a href="use.php">users</a>
  <a href="alert.php">cars</a>
  <a href="alert.php">car available</a>
  <a href="../index.php">home</a>
   <a href="price.php">set price</a>

  
   <?php  if (isset($_SESSION['name'])) : ?>
      

      
       
      
      <a href="index.php?logout='1'" style="color: red;">logout</a> 
    
 
    
    <?php endif ?>
    
  
  
 
   

</div>
</p>

  

      </a> </p>

      

    
    

<div class="content">




<?php
//require('server1.php');
//include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from cars where id='".$id."'"; 
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

<p><input type="text" name="age" placeholder="<?php echo $row['price'];?>" 
required value="<?php echo $row['price'];?>" /></p>
<p><input type="text" name="telephone" placeholder="Enter Age" 
required value="<?php echo $row['no'];?>" /></p>

<p><input name="submit" type="submit" value="buy" /></p>
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
