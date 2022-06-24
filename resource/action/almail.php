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

$message = '<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aladdin Maintenance</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbars default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    .pageTitle {
      color: white;
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

    /* On small screens, set height to "auto" for sidenav and grid */
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
      <h1 class="pageTitle">Aladdin Maintenace</h1>
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
    <div class="col-sm-8 text-left window"><div class="table-responsive"><table class="table table-hover">
          <thead>
            <tr>
              <th>Park</th>
              <th>Lot No.</th>
              <th>Type</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
<tr><td>' . $parkName . '</td><td>' . $lotNo . '</td><td>' . $probType . '</td><td>' . $description . '</td></tr></tbody></table></div>
</div>
<div class="col-sm-2 sidenav">

</div>
</div>
</div>

<footer class="container-fluid text-center">
<p><?php echo date("l jS \of F Y h:i:s A"); ?></p>
</footer>
</body>
</html>';

$headers .= 'From: <sfleming6488@theflemingdrive.com>' . "\r\n";

mail('sidney.a.fleming@gmail.com', 'Maintenance', $message, $headers);

echo '<script>
  window.location.replace("http://www.theflemingdrive.com/aladdin.php");
</script>';

?>
