

<?php require'session.php' ?>

<!DOCTYPE html>
<html>
<head>
    <title>welcome admin</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../csss.css">





</head>
<body>
    <div>
    <br>
    <h2>This are your user</h2>

</div>





<?php
$server="localhost";

$username="root";
$password="";
$dbname="transystem";
$mik="";

// Create connection
$conn = new mysqli($server, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, username, email FROM  cashier";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " " . $row["id"]. "". $row["username"]. "<b> " . $row["email"]. "</b><br><button> remove</button><button> edit </button><br>"






        ;
        $mik=$row['id'];

    }
} else {
    echo "0 results";
}


/*$sql = "SELECT place, landlord,agent,commission FROM house";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo"houses <br>";
        echo "place: " . $row["place"]. " - landlord: " . $row["landlord"]. " " . $row["agent"]. "<br>";
    }
} else {
    echo "0 results";
}


*/


$conn->close();
?>


<?php echo $mik; ?>
</body>
</html>