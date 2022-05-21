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

    form {
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
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8 text-left window">
      <form>
        <h1>Maintenance Request</h1>
        <hr>
        <label for="parkName">Park: </label>
        <select id="parkName" name="parkName">
          <option value="231">231</option>
          <option value="hartselle">Hartselle</option>
          <option value="Dudley">Dudley</option>
        </select><br>
        <label for="lotNo">Lot No. : </label>
        <input type="text" id="lotNo" name="lotNo"><br>
        <label for="probType">Problem Type: </label>
        <select id="probType" name="probType">
          <option value="plumbing">Plumbing</option>
          <option value="electrical">Electrical</option>
          <option value="sewage">Sewage</option>
          <option value="hvac">HVAC</option>
          <option value="exterior">Exterior</option>
          <option value="other">Other</option>
        </select><br>
        <label for="description">Description: </label>
        <input type="text" id="description" name="description"><br><br>
        <input type="submit">
      </form>
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
