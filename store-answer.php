<?php
if (isset($_POST['answer'])) {
  $answer = $_POST['answer'];
  $file = fopen('answers.txt', 'a');
  fwrite($file, $answer . "\n");
  fclose($file);
}
?>