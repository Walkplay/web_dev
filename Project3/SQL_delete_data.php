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
$id = $_POST["ID"];

$sql = "DELETE FROM " . $table . " WHERE id = " . $id;
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
<br >
<a href="DataBaseControlPage.html"target="_parent">Back to control panel</a><br >
</body >
</html >