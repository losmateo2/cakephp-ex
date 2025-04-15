<?php
  $rand_color = '#' . dechex(mt_rand(0, 16777215));
  echo "<body style='background-color:$rand_color'>";
  echo "hello from " . gethostname();
  echo "<br>";
?>
