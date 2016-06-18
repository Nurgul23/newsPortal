<?php
include("connect.php");
$newTitle=$_POST["title"];
$newDescription=$_POST["description"];
$newImage=$_FILES["file"];

$adDeyis=substr($newImage["name"], -3);
$yeniAd="sekil".rand().".".$adDeyis;
move_uploaded_file($newImage["tmp_name"], "../images/$yeniAd");
session_start();
$id=$_SESSION["id"];
$query="update xeberler set title=\"$newTitle\",description=\"$newDescription\",imagePath=\"images/$yeniAd\" where id=$id";
$nese=mysqli_query($connect,$query);
if ($nese) {
  header("Location:allnews.php");
}
else {
  echo "Error 404 not found";
}
 ?>
