
<?php require'session.php' ?>

<?php
//require('server1.php');
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="icon" href="../download.jpg" type="image/gif" sizes="17x17">

<style>
.mySlides {display:none;
}

.top{
  background-color: red;
  margin: 40%;
}

body {
  margin: 0;
  font-size: 28px;
  font-family: Arial, Helvetica, sans-serif;
  background-color: blue;
  color: white;
}

.header {
  background-color: blue;
  padding: 30px;
  text-align: center;
  font-size: 30%;
  margin:%;
  color:#00008B;
  font-family: Arial Black;
}

#navbar {
  overflow: hidden;
  background-color:#00BFFF;
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
  
  <a href="manager.php">admin</a>
  <a href="news.php" >News</a>
  <a href="register.php">register cashier</a>
  <a href="use.php">users</a>
  <a href="cars.php">cars</a>
   <a href="price.php" class="active">set price</a>
   
  
   <?php  if (isset($_SESSION['name'])) : ?>
      

      
       
      
      <a href="index.php?logout='1'" style="color: red;">logout</a> 
     <a href="index.php?logout='1'" style="color: red;">home</a> 
 
    
    <?php endif ?>
    
  
  
 
   

</div>
</p>
<div class="j">

	<form action="" method="POST">
		<label>price</label>
		<input type="price" name="price">
		<input type="submit" name="submit" value="update">
	</form>
</html>


</div>
  

      </a> </p>

      

    
    

<div class="content">
 
  
</div>


<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
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



<!DOCTYPE html>
<html>
<head>
  <title>news </title>
</head>

</style>

<?php 
$price=filter_input(INPUT_POST, 'price');


   
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="transystem";
//creating connection
    $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
      die( 'connect Error('.mysqli_connect_errno().')'.mysqli_connect_error()    );
    }
    else{

if (isset($_POST['submit'])) {


  
    $sq="UPDATE `price` SET `price`=$price WHERE 1";



    if($conn->query($sq)){
      echo "updated price to $price";
      //header('location:index.php');
    }
    else{
      echo "Error:" .$sq,"<br>".$conn->error;
    }
  }








  


}

   // $conn->close();


 ?>















