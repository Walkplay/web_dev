<html >
<body >
<h1 style="text-align: center;">Create DataBase</h1>
<?php
//include 'SQLConnection.php';
//use Project3\Connection\SQLConnection as SQLConnection;
session_start();
$_SESSION['DBname'] = $_POST [ "DBname" ]; // localhost by default

//$instance = SQLConnection::getInstance();
$conn = mysqli_connect($_SESSION['host'], $_SESSION['user'], $_SESSION['pass']);
if($conn === null){
	die( "Connection is not exist! ");
}
else if (!$conn) { // Check connection
	die( "Connection failed: " . mysqli_connect_error());
}
else
	echo nl2br("Connected successfully\n") ;

$sql = "CREATE DATABASE " . $_SESSION['DBname'] ;

if ($result = mysqli_query($conn, $sql) === TRUE) {
    echo nl2br("Database created successfully\n");
} else {
    echo nl2br("Error creating database: " . $conn->error);
}
$conn->close();
?>
<br >
<a href="DataBaseControlPage.html"target="_parent">Back to control panel</a><br >
</body >
</html >