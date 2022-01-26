<?php

function absVal($absVIn) {
  if ($absVIn > 0) {
    echo $absVIn;
  } else {
    echo $absVIn - $absVIn;
  }
}

function returnUnitVec($vecMag, $vecAMag, $vecBMag) {
  echo sqrt(pow($vecMag, 2) - pow($vecAMag, 2) - pow($vecBMag, 2);
}

?>
