<?php
// $inputtedItem = [];
include("admin/connect.php");



	  $inputtedItem=$_POST["search"];
    $q="select title from xeberler where title like %\"$inputtedItem\"% or die ('There is 0 search result')";
    $query = mysqli_query($connect,$q);
    var_dump($query); 
    $row=mysqli_fetch_assoc($query);




?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
      while ($row) {
        echo "<h2>";
          var_dump($row);
        echo "</h2>";
      }

       ?>
  </body>
</html>
