<?php

function absVal($absVIn) {
  if ($absVIn > 0) {
    echo '<p>' . $absVIn . '</p>';
  } else {
    echo '<p>' . $absVIn - $absVIn . '</p>';
  }
}

?>
