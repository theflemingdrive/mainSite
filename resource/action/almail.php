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

$message = echo "<div class='table-responsive'><table class='table table-hover'>
          <thead>
            <tr>
              <th>Park</th>
              <th>Lot No.</th>
              <th>Type</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
<tr><td>" . $parkName . "</td><td>" . $lotNo . "</td><td>" . $probType . "</td><td>" . $description . "</td></tr></tbody></table></div>";

mail('sidney.a.fleming@gmail.com', 'Maintenance', $message);

?>
