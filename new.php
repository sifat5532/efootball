<?php

$percent = 60.189/100;
$i=0;
$x = 100;


while($x >= 1) {
    echo"energy$i: $x<br>";
    $x=$x-($x*$percent);
    $i++;
  }

  echo "$i";
?>