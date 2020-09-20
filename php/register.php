<?php
 include 'db.inc.php';

 $sql = "INSERT INTO tbl_accounts (firstname , lastname , username , password ) 
 VALUES(' ".$_POST["username"]." ' , ' ".$_POST["lastname"]." ' , '".$_POST["username"]." ' , '".$_POST["password"]." ' )";
 
$result = $conn->query($sql);
 $conn->close();