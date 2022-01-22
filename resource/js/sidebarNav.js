var app = angular.module("sideNav", ["ngRoute"]);
app.config(function($routeProvider) {
  $routeProvider
  .when("/", {
    templateUrl : "http://www.theflemingdrive.com/resource/sideNav/home.htm"
  })
  .when("/vectorAdd", {
    templateUrl : "http://www.theflemingdrive.com/resource/sideNav/calc/vectorAdd.htm"
  })
  .otherwise({
    template : "<h1>None</h1><p>Nothing has been selected</p>"
  });
});

app.controller("veAddCtrl", function ($scope) {
    $scope.msg = "VecAdd";
});
