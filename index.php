<!DOCTYPE html>
<html lang="en" dir="ltr" class="sid-plesk">
<head>
    <title>The Fleming Drive</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache">
    <link rel="shortcut icon" href="favicon.ico">

    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/resource/css/desktop.css">
    <link rel="stylesheet" href="/resource/css/clearFix.css">
    <link rel="stylesheet" href="/resource/css/cssReset.css">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap 3 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- AngularJS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

    <!-- Scripts -->


</head>
<body ng-app="myApp">

  <header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">TheFlemingDrive</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
            <li class="active"><a href="contact.php">Contact Me</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Work Data
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="workData/rod_calc.php">Rod Calculator</a></li>
                  <li><a href="workData/die_speeds.php">Die Speeds</a></li>
                </ul>
            </li>
            <li><a href="#" id="workLoginButton"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
	</header>

<!-- `````````````````````````` START SIDEBAR `````````````````````````````````````````````````` -->

  <div id="sideBar">
    <img src="/resource/img/logoLarge.png" alt="Fleming Drive Logo" width="98%" height="auto">

    <div class="panel-group">
      <a href="#/!"><div class="panel panel-default">
        <div class="panel-heading" href="#/!">
          <h4 class="panel-title">Home</h4>
        </div>
      </div></a>
    </div>

    <div class="panel-group">
      <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" href="#collapse2">
          <h4 class="panel-title">Calculators</h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
          <ul class="list-group">
            <li class="list-group-item"><a href="#!red">Vectors</a></li>
            <li class="list-group-item">Two</li>
            <li class="list-group-item">Three</li>
          </ul>
          <div class="panel-footer">Footer</div>
        </div>
      </div>
    </div>

    <div class="panel-group">
      <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" href="#collapse3">
          <h4 class="panel-title">Math Stuff</h4>
        </div>
        <div id="collapse3" class="panel-collapse collapse">
          <ul class="list-group">
            <li class="list-group-item"><a href="#">Vector Addition</a></li>
            <li class="list-group-item">Two</li>
            <li class="list-group-item">Three</li>
          </ul>
          <div class="panel-footer">Footer</div>
        </div>
      </div>
    </div>

  </div>

<!-- ````````````````````````````` END SIDEBAR ``````````````````````````````````````````````` -->

	<div id="mainView" ng-view>
    <h1>Hi</h1>
	</div>

  <div id="adBlock">
    <h1>Heading 2</h1>
  </div>

	<footer>
	</footer>

  <script>
  var app = angular.module("myApp", ["ngRoute"]);
  app.config(function($routeProvider) {
  $routeProvider
  .when("/", {
    templateUrl : "/resource/sideNav/home.htm"
  })
  .when("/red", {
    templateUrl : "/resource/sideNav/calc/vectors.php"
  })
  .when("/green", {
    templateUrl : "green.htm"
  })
  .when("/blue", {
    templateUrl : "blue.htm"
  });
});
</script>

</body>
</html>
