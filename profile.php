<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h2>Profile</h2>
    <?php
 session_start();
 include 'php/db.inc.php';

 $sql = "SELECT * FROM tbl_accounts where username = '".$_SESSION["user"].
 "'";

 $result = $conn->query($sql);

 $row = $result->fetch_assoc();
  echo "Username: ".$row["username"]."<br/>";
  echo "First Name: ".$row["firstname"]."<br/>";
  echo "Last Name: ".$row["lastname"]."<br/>";
  
  ?>
</body>
</html>