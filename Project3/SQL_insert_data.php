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
$lName = $_POST [ "Lname" ];
$email = $_POST [ "Email" ];


$sql = "INSERT INTO " . $table . " (firstname, lastname, email)
VALUES ('" . $fName . "', '" . $lName . "', '" . $email . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<br >
<a href="DataBaseControlPage.html"target="_parent">Back to control panel</a><br >
</body >
</html >