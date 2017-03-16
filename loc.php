<?php
$file = fopen('loc.txt', 'w');
?>
<form action="loc.php" method="POST">
  <input type="text" name="loc">
  <input size="50" type="submit" value="Update Location">
</form>
<?php
  $location = $_POST['loc'];
  fwrite($file, $location);
  var_dump($file);
  fclose($file);
  echo 'location probably updated (no error handling yet)';
?>
