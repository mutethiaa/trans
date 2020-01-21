
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
  <a href="manager.php" class="active">admin</a>
  <a href="news.php">News</a>
  <a href="register.php">register cashier</a>
  <a href="use.php">users</a>
  <a href="cars.php">cars</a>
  <a href="report.php">report</a>
  <a href="price.php">set price</a>

   
  
   <?php  if (isset($_SESSION['name'])) : ?>
      
      
      <a href="index.php?logout='1'" style="color: red;">logout</a> 
     <a href="index.php?logout='1'" style="color: red;">home</a> 
 
    
    <?php endif ?>
    <form method="POST" action="">
      <input type="text" name="q" placeholder="query">
      <input type="submit" name="search" value="Search">
    </form>
    
  

 
   

</div>
welcome   <?php echo $_SESSION['name'];  ?>
</p>
<div class="j">


      </a> </p>

    
<div class="content">

<?php
include_once('search.php');
if(isset($_POST['search'])){
  $q = $_POST['q'];
  $query = mysqli_query($conn,"SELECT * FROM `cashier` WHERE `username` LIKE '%$q%'"); 
//Replace table_name with your table name and `thing_to_search` with the column you want to search
  $count = mysqli_num_rows($query);
  if($count == "0"){
    $output = '<h2>No result found!</h2>';
  }else{
    while($row = mysqli_fetch_array($query)){
    $s = $row['username']; // Replace column_to_display with the column you want the results from
        $output .= '<h2>'.$s.'</h2><br>';
      }
    }
  }
?>
  
    
    <?php echo $output; ?>
  
 
  
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




      
  </ul>
  
  
  

</div>


<ul>


<div class="content">
  	<!-- notification message -->
  

    <!-- logged in user information -->
  

          

   

 



	   
</body>
</html>