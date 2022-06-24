<?php
// define variables and set to empty values
$parkName = $lotNo = $probType = $description = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $parkName = test_input($_POST["parkName"]);
  $lotNo = test_input($_POST["lotNo"]);
  $probType = test_input($_POST["probType"]);
  $description = test_input($_POST["description"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = addslashes($data);
  return $data;
}

$message = 'Park: ' . $parkName . '
Lot No: ' . $lotNo . '
Type: ' . $probType . '
Description: ' . $description;

$headers = 'From: <sfleming6488@theflemingdrive.com>' . '\r\n';

mail('sfleming6488@theflemingdrive.com', 'Maintenance', $message, $headers);

echo '<script>
  window.location.replace("http://www.theflemingdrive.com/aladdin.php");
</script>';

?>
