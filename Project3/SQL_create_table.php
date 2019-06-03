<html >
<body >
<?php
//echo nl2br($_SESSION['host'] . "\n" . $_SESSION['user'] . "\n" . $_SESSION['pass'] . "\n" . $_SESSION['DBname']);
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

// sql to create table
$sql = "CREATE TABLE ". $_POST [ "Tname" ] ." (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($result = mysqli_query($conn, $sql) === TRUE) {
    echo nl2br("Table created successfully\n");
} else {
    echo nl2br("Error creating new table: " . $conn->error);
}

$conn->close();
?>
<br >
<a href="DataBaseControlPage.html"target="_parent">Back to control panel</a><br >
</body >
</html >