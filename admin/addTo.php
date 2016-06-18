<?php
 include("connect.php");

  $image=$_FILES["file"];
  $basliq=$_POST["title"];
  $movzu=$_POST["description"];

  $adDeyis=substr($image["name"], -3);
  $yeniAd="sekil".rand().".".$adDeyis;
  move_uploaded_file($image["tmp_name"], "../images/$yeniAd");


   $queryNew="insert into xeberler (title,imagePath,description) values(\"$basliq\",\"images/$yeniAd\",\"$movzu\")";
   $nese=mysqli_query($connect,$queryNew);
 if ($nese) {
  header("Location:add.php");
}
else {
  echo "error var alinmadi senin xeberin!!!";
}


 ?>
