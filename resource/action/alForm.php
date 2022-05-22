<?php
// define variables and set to empty values
$parkName = $lotNo = $probType = $description = "";
$date = date("n / d / Y");

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

$servername = "localhost";
$username = "sfleming6488_almaint";
$password = "AlMaint123!%";
$dbname = "sfleming6488_almaint";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO requests (park, lot, type, description, dateReq)
VALUES ";
$sql2 = $sql . "('" . $parkName . "', '" . $lotNo . "', '" . $probType . "', '" . $description . "', '" . $date . "')";

if ($conn->query($sql2) === TRUE) {
  echo "New Request Accepted <br> <a href='https://www.theflemingdrive.com/aladdin.php'>Back to Home</a>";
} else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;
}

$conn->close();

?>
