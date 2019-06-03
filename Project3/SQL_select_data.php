<html >
<body >
<?php
session_start();
$conn = mysqli_connect($_SESSION['host'], $_SESSION['user'], $_SESSION['pass'], $_SESSION['DBname']);

// Check connection
if($conn === null){
	die( "Connection is not exist! ");
}
else if (!$conn) { // Check connection
	die( "Connection failed: " . mysqli_connect_error());
}
else
	echo nl2br("Connected successfully\n") ;

$table = $_POST [ "Table" ];
$fName = $_POST [ "Fname" ];

$sql = "SELECT * FROM " . $table . " WHERE firstname = '" . $fName . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " - Email: ". $row["email"] . " - Date: ". $row["reg_date"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<br >
<a href="DataBaseControlPage.html"target="_parent">Back to control panel</a><br >
</body >
</html >