<html >
<body >

<?php
//include 'SQLConnection.php';
//use Project3\Connection\SQLConnection as SQLConnection;
session_start();

$_SESSION['host'] = $_POST [ "Host" ]; // localhost by default
$_SESSION['user'] = $_POST [ "Username" ];
$_SESSION['pass'] = $_POST [ "Password" ];
//$instance = SQLConnection::getInstance();
//$instance->setConnection($host, $username, $password);
//$conn = $instance->getConnection();


$conn = mysqli_connect($_SESSION['host'], $_SESSION['user'], $_SESSION['pass']);
if($conn === null){
	die( "Connection is not exist! ");
}
else if (!$conn) { // Check connection
	die( "Connection failed: " . mysqli_connect_error());
}
else
	echo nl2br("Connected successfully\n") ;
$conn->close();
?>
<br >
<a href="DataBaseControlPage.html"target="_parent">Go to control panel</a><br >

</body >
</html >