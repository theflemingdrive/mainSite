var app = angular.module("sideNav", ["ngRoute"]);
app.config(function($routeProvider) {
  $routeProvider
  .when("/", {
    templateUrl : "http://www.theflemingdrive.com/resource/sideNav/home.htm"
  })
  .when("/vectorAdd", {
    templateUrl : "http://www.theflemingdrive.com/resource/sideNav/calc/vectorAdd.htm"
  });
});

app.controller("veAddCtrl", function ($scope) {
    $scope.msg = "VecAdd";
});
