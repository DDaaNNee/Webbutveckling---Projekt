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
    <h1>Länkar till andra sidor</h1>
    <h2><a href="index.html">Index.html</h2>
    <h2><a href="form.html">Form.html</h2>
    <h2><a href="process.php">Process.php</h2>

  </body>
</html>
<?php
function addToDatabase($namn){

}
 ?>
