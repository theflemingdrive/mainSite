<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aladdin Maintenance</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 825px}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    .window {
      display: flex;
      justify-content: center;
      align: center;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <h1>Aladdin Maintenace</h1>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><button type="button" class="btn" data-toggle="modal" data-target="#loginWindow">LOGIN</button></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8 text-left window">

      <div>
      <h1>231/431</h1>
      <?php
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

      $sql = "SELECT * FROM requests WHERE park = '231'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<div class='table-responsive'>
                  <table class='table'>
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Lot No.</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Notes</th>
                        <th>Complete</th>
                      </tr>
                    </thead>
                    <tbody>
          <tr><td>" . $row["id"] . "</td><td>" . $row["dateReq"] . "</td><td>" . $row["lot"] . "</td><td>" . $row["type"] . "</td><td>" . $row["description"] . "</td><td>" . $row['notes'] . "</td><td>" . $row['complete'] . "</td></tr>
          </tbody>
          </table>
          </div><br>";
        }
      } else {
        echo "0 results";
      }
      $conn->close();
      ?>
      </div>

      <br><hr><br>

      <div>
      <h1>Dudley Rd</h1>
      <?php
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

      $sql = "SELECT * FROM requests WHERE park = 'Dudley'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<div class='table-responsive'>
                  <table class='table'>
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Lot No.</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Notes</th>
                        <th>Complete</th>
                      </tr>
                    </thead>
                    <tbody>
          <tr><td>" . $row["id"] . "</td><td>" . $row["dateReq"] . "</td><td>" . $row["lot"] . "</td><td>" . $row["type"] . "</td><td>" . $row["description"] . "</td><td>" . $row['notes'] . "</td><td>" . $row['complete'] . "</td></tr>
          </tbody>
          </table>
          </div><br>";
        }
      } else {
        echo "0 results";
      }
      $conn->close();
      ?>
      </div>

      <br><hr><br>

      <div>
      <h1>Hartselle</h1>
      <?php
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

      $sql = "SELECT * FROM requests WHERE park = 'Hartselle'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<div class='table-responsive'>
                  <table class='table'>
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Lot No.</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Notes</th>
                        <th>Complete</th>
                      </tr>
                    </thead>
                    <tbody>
          <tr><td>" . $row["id"] . "</td><td>" . $row["dateReq"] . "</td><td>" . $row["lot"] . "</td><td>" . $row["type"] . "</td><td>" . $row["description"] . "</td><td>" . $row['notes'] . "</td><td>" . $row['complete'] . "</td></tr>
          </tbody>
          </table>
          </div>";
        }
      } else {
        echo "0 results";
      }
      $conn->close();
      ?>
      </div>

    </div>
    <div class="col-sm-2 sidenav">

    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
