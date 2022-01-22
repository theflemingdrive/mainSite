var app = angular.module("sideNav", ["ngRoute"]);
app.config(function($routeProvider) {
  $routeProvider
  .when("/", {
    templateUrl : "/sideNav/home.htm"
  })
  .when("/vectorAdd", {
    templateUrl : "/sideNav/calc/vectorAdd.php"
  });
});

app.controller("veAddCtrl", function ($scope) {
    $scope.msg = "VecAdd";
});
