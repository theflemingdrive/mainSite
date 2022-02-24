<!DOCTYPE html>
<html lang="en" dir="ltr" class="sid-plesk">
<head>
    <title>The Fleming Drive</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache">
    <link rel="shortcut icon" href="Favicon.jpg">

    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/resource/css/clearFix.css">
    <link rel="stylesheet" href="/resource/css/cssReset.css">
    <link rel="stylesheet" href="/resource/css/desktop.css"> <!-- Desktop Stylesheet -->

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap 3 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- AngularJS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

    <!-- Scripts -->
    <script src="/resource/js/sidebarNav.js"></script> <!-- Sidebar Navigation, AngularJS -->


</head>
<body ng-app="myApp">



<!-- `````````````````````````` Header `````````````````````````````````````````````````` -->
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
            <li><button type="button" class="btn" data-toggle="modal" data-target="#loginWindow">LOGIN</button></li>
          </ul>
        </div>
      </div>
    </nav>
	</header>
<!-- `````````````````````````` End Header `````````````````````````````````````````````````` -->



<!-- `````````````````````````` START SIDEBAR `````````````````````````````````````````````````` -->

  <div id="sideBar">
    <img src="/resource/img/logoLarge.png" alt="Fleming Drive Logo" width="98%" height="auto">

    <div class="panel-group">
      <a href="#/!"><div class="panel panel-default">
        <div class="panel-heading">
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



<!-- `````````````````````````` Main View `````````````````````````````````````````````````` -->
	<div id="mainView" ng-view>
    <img src="resource/img/brain.jpg" width="100%" height="auto">
	</div>
<!-- `````````````````````````` End Main View `````````````````````````````````````````````````` -->



<!-- `````````````````````````` Side Ads `````````````````````````````````````````````````` -->
  <div id="adBlock">
    <h1>Heading 2</h1>
  </div>
<!-- `````````````````````````` End Side Ads `````````````````````````````````````````````````` -->



<!-- `````````````````````````` Footer `````````````````````````````````````````````````` -->
	<footer>

	</footer>
<!-- `````````````````````````` End Footer `````````````````````````````````````````````````` -->



<!-- ```````````````````````````` Login Window ``````````````````````````````````````````````` -->
  <div id="loginWindow" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btn-danger" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="post" action="/resource/action/loginAction.php">
          <div class="form-group">
            <label class="control-label col-sm-2" for="userName">Username:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="userName" maxlength="25" width="48" autocomplete="on" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="passWord">Password:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="passWord" maxlength="25" width="48" autocomplete="on" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">SUBMIT</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
  </div>
<!-- ```````````````````````````` End Login Window ``````````````````````````````````````````` -->



</body>
</html>
