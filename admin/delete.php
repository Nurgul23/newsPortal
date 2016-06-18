<?php
include("connect.php");

$id=$_GET["name"];

$q="delete from xeberler where id=$id";
$query=mysqli_query($connect,$q);
if ($query) {
  header("location:allnews.php");
}
else {
  echo "error";
}
 ?>
