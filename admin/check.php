<?php
include("connect.php");
$mail=$_POST["mail"];
$password=$_POST["password"];
$sqlQuery="select * from users where mail=\"$mail\" and password=\"$password\"";
$query=mysqli_query($connect,$sqlQuery);
$use=mysqli_fetch_assoc($query);

if ($use!=NULL) {
  header("Location:add.php");
}
else {
  header("Location:index.php");
}

 ?>
