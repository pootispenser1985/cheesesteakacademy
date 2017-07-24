<?php
$file = fopen('loc.txt', 'w') or die('could not open');
?>
<form action="loc.php" method="POST">
  <input type="text" name="loc">
  <input size="50" type="submit" value="Update Location">
</form>

<?php
  $location = $_POST['loc'];
  fwrite($file, $location);
  fclose($file);
?>
