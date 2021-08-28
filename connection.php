<?php
$servername = "localhost";
$username = "root";
$password = "";
try{
	$conn = new PDO("mysql:host=$servername;dbname=magento_test",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
}catch(PDOException $e){
	echo "connection failed:".$e->getMessage();
}
echo "Connected";
?>