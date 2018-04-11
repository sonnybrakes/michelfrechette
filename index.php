<?php

  $names = array('michel', 'carole', 'pauline', 'julie');

  $count = 0;

  while($count < count($names)) {
    echo "<li>Hi, my name is $names[$count]</li>";
    $count++;
  }

?>
