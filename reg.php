<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mysql";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "CREATE TABLE ff (
Name VARCHAR(15) NOT NULL,
Address VARCHAR(50) NOT NULL,
Email VARCHAR(50),
Password VARCHAR(50),
Phone VARCHAR(12),
Subject VARCHAR(30)
)";
$name = $email = $address = $password = $phone = $subject = $service = "";
if($conn->query($sql) === TRUE){
	echo "database created successfully";
}
if($_SERVER["REQUEST_METHOD"] == "POST" ){
	$name=$_POST['Name'];
	$address=$_POST['Address'];
	$email=$_POST['Email'];
	$password=$_POST['Password'];
	$phone=$_POST['Phone'];
	$service=$_POST['Subject'];
}
$sql = "INSERT INTO ff (Name, Address, Email, Password, Phone, Subject) VALUES ('$name', '$address', '$email','$password', '$phone', '$service')";
if($conn->query($sql) === TRUE) {
	echo "Created recoed";
}
mysqli_close($conn);
?>
