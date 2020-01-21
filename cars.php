<?//php require'session.php' ?>



<?php 

  session_start(); 

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
<link rel="icon" href="../download.jpg" type="image/gif" sizes="17x17">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">

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
  <a href="use.php">users</a>
  <a href="cars.php" class="active">cars</a>
   <a href="report.php">report</a>
    <a href="price.php">set price</a>

   
  
   <?php  if (isset($_SESSION['name'])) : ?>
      

      
       
      
      <a href="index.php?logout='1'" style="color: red;">logout</a> 
     <a href="index.php?logout='1'" style="color: red;">home</a> 
 
    
    <?php endif ?>
  
</div>
</p>
  

      </a> </p>

<div class="content">
  <?php 


$conn=mysqli_connect("localhost","root","","transystem");
if ($conn){

//echo "connected";
}

if(isset($_POST['uploadsub']))
{
  $price=filter_input(INPUT_POST, 'price');
  $no=filter_input(INPUT_POST, 'no');

$filename=$_FILES['uploadfile']['name'];

$filetmpname=$_FILES['uploadfile']['tmp_name'];
$folder='uploadedimg/';


move_uploaded_file($filetmpname, $folder.$filename);



  
  $sql="INSERT INTO cars( pic,price,no) VALUES ('$filename','$price','$no')";







  $qry=mysqli_query($conn, $sql);
  if ($qry) {
    //echo "image success";
    # code...
  } else
  echo "not uploaded";

}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
  <title>cars</title>
  <style>
    img{
      width: 40%;
      border-color:blue;
      border-radius: 21%;
      
    }
    button{
      background-color: blue;
      color: white;
    }
body{
  font-family: arial;
  background-color: blue;
  color: white;



}
  </style>
 </head>
 <body>


  <form action="" method="POST" enctype="multipart/form-data">
    <input type="tex" name="no" placeholder="car no">
<input type="text" name="price" placeholder="price">    
<input type="file" name="uploadfile"  value="image" placeholder="image">
<input type="submit" name="uploadsub" value="upload" >



  </form>

  <?php 



$conn=mysqli_connect("localhost","root","","transystem");
$sql="SELECT * FROM cars";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($result)) {


  echo "
  

  <img src='uploadedimg/" . $row['pic']. " '>


  ";
  echo " <br>Car no:" . $row["no"]. "<br>Hiring price :" . $row["price"]. "<br> ";
  
  # code...
}


   ?>

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



