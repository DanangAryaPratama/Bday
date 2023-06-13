<!DOCTYPE html>
<html>
<head>
  <title>View Answers</title>
</head>
<body>
  <h2>Gift Request Answers</h2><br>
  <?php
  $file = fopen('answers.txt', 'r');
  if ($file) {
    while (($line = fgets($file)) !== false) {
      echo $line . "<br>";
    }
    fclose($file);
  }
  ?>
</body>
</html>