<?php
  $rand_color = '#' . substr(md5(gethostname()), 0, 6);
  echo "<body style='background-color:$rand_color'>";
  echo "<h1>hello from " . gethostname()</h1>;
  echo "<br>";
?>
