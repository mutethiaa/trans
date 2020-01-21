<?php
require('server1.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM cashier WHERE id=$id"; 
$result = mysqli_query($db,$query) or die ( mysqli_error());
header("Location: use.php"); 
?>