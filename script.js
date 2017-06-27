	
// LOGIN and SIGNUP injectors

var phonemeApp = angular.module('App', ['ngRoute']);

phonemeApp.controller('MainController', function($scope) {
  
});

phonemeApp.config(function($routeProvider) {
  $routeProvider

  .when('/', {
    templateUrl : 'view/login.html',
    controller  : 'LoginController'
  })

  .when('/register', {
    templateUrl : 'view/register.html',
    controller  : 'RegisterController'
  })
  
  .when('/start', {
  	templateUrl : 'view/start.html',
  	controller : 'StartController'
  })

  .otherwise({redirectTo: '/'});
});

phonemeApp.controller('LoginController', function($scope) {

});

phonemeApp.controller('RegisterController', function($scope) {

});

phonemeApp.controller('StartController', function($scope) {

});






