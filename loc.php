<?php
$file = fopen('loc.txt', 'r') or die('could not open');
?>
<form action="loc.php" method="POST">
  <input type="text" name="loc">
  <input size="50" type="submit" value="Update Location">
</form>
<?php
  //$location = $_POST['loc'];
  //fwrite($file, $location);

  fclose($file);
  
  echo '<br>location probably updated (no error handling yet)';
?>
