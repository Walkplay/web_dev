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
$fName = $_POST [ "Fname" ];

$sql = "UPDATE " . $table . " SET firstname='" . $fName . "' WHERE id=" . $id;

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
<br >
<a href="DataBaseControlPage.html"target="_parent">Back to control panel</a><br >
</body >
</html >