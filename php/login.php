<?php 
include 'db.inc.php';
session_start();

$sql= "SELECT * FROM tbl_accounts where username = '".$_POST["username"]."' and password = '" .$_POST["password"]."'";
$result = $conn->query($sql);
if($result -> num_rows > 0){
	$_SESSION["user"] = $_POST["username"];
	echo "success";
}else{
	echo "fail";
}