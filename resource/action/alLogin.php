<?php
// define variables and set to empty values
$userName = $passWord = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $userName = test_input($_POST["userName"]);
  $passWord = test_input($_POST["passWord"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function checkLogin($usr, $pwd) {
  $servername = "localhost";
  $username = "almaint";
  $password = "AlMaint123!%";
  $dbname = "sfleming6488_almaint";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT username, password FROM users WHERE username = " . $usr . "";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    if ($row["password"] == $pwd) {
      echo '<script>window.location.replace("http://www.theflemingdrive.com/alLanding.php");</script>';
    } else {
      echo "Password Incorrect!";
    }
  } else {
    echo "Username Not Found!";
  }
  $conn->close();
}

checkLogin($userName, $passWord);

?>
