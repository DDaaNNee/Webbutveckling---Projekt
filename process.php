<!DOCTYPE html>
<?php
  $namnet = "";
  if (isset($_GET["namn"])) {
    $namnet = $_GET["namn"];

    addToDatabase($namnet);
  }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
<?php
function addToDatabase($namn){

}
 ?>
