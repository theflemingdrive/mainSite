<?php

function absVal($absVIn) {
  if ($absVIn > 0) {
    return '<p>' . $absVIn . '</p>';
  } else {
    return '<p>' . $absVIn - $absVIn - $absVIn . '</p>';
  }
}

?>
