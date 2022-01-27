<!DOCTYPE html>
<html>
<body>

  <?php
    // define variables and set to empty values
    $actRuntime = $totalRuntime = $cycleTime = $actParts = $badParts = "";

    $actRuntime = test_input($_POST["actRuntime"]);
    $totalRuntime = test_input($_POST["totalRuntime"]);
    $cycleTime = test_input($_POST["cycleTime"]);
    $actParts = test_input($_POST["actParts"]);
    $badParts = test_input($_POST["badParts"]);

    $avail = $actRuntime / $totalRuntime;
    $perform = $actParts / $totalRuntime;
    $qual = ($actParts - $badParts) / $actParts;
    $oeeActual = $avail * $perform * $qual;

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

  ?>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h1>OEE Calculator</h1>
    <hr>
    <label for="actRuntime">Actual Runtime (minutes): </label>
    <input type="number" name="actRuntime" id="actRuntime">
    <br><br>
    <label for="totalRuntime">Total Runtime (minutes): </label>
    <input type="number" name="totalRuntime" id="totalRuntime">
    <br><br>
    <label for="cycleTime">PPM: </label>
    <input type="number" name="cycleTime" id="cycleTime">
    <br><br>
    <label for="actParts">Total Parts Ran: </label>
    <input type="number" name="actParts" id="actParts">
    <br><br>
    <label for="badParts">Scrap Count: </label>
    <input type="number" name="badParts" id="badParts">
    <br><br>
    <input type="submit" placeholder="Submit">
  </form>

  <h1>OEE: </h1>
  <?php echo '<h3>' . $oeeActual . '</h3>'; ?>
</body>
</html>
