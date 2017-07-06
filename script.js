	
// LOGIN and SIGNUP Authentication Logic

var user,pass,repass,blank,blank2,message,credententials,credentialsjson,getUser,getPass,validate,getObject,parseObject,startLink;



function storeCredentials() {
	
	// Declare variables

   user = document.getElementById('user').value;
   pass = document.getElementById('pass').value;
   repass = document.getElementById('repass').value;
   blank = "";
  
   message = {"message1":"User account has been created."
		            ,"message2":"Cannot leave fields blank."
		            ,"message3":"Passwords do not match. Please try again."
		            ,"message4":"Something is wrong. Contact the administrator."};
  
	// Store username and password locally
	
	if (pass != blank && repass != blank && pass == repass && user != blank) {
	
	 credentials = {"user":user
		             ,"pass":pass};
		                
	 credentialsjson = JSON.stringify(credentials);
			
	localStorage.setItem('storeUser', credentialsjson);	
   
      loadingLink = document.getElementById("loadinglink");
      window.location.href = "#/loading";
   
  setTimeout(function() {

    	startLink = document.getElementById("startlink");
      window.location.href = "#/start";

  }, 2500 ); 
	
	} else if (user == blank || pass == blank || repass == blank) {
		
		document.getElementById("validatemessage").style.color ="#FF8C00";
		document.getElementById('validatemessage').innerHTML = message.message2;
		
	} else if (pass != repass) {
		
		document.getElementById("validatemessage").style.color = "#FF8C00";
		document.getElementById('validatemessage').innerHTML = message.message3;
		
	} else {
		
		document.getElementById("validatemessage").style.color = "red";
		document.getElementById('validatemessage').innerHTML = message.message4;
		
	}

}


function getCredentials() {
	
	 getUser = document.getElementById('getUser').value;
   getPass = document.getElementById('getPass').value;
   blank2 = ""; 
  
   validate ={"validate1":"Login Successful. Welcome."
		            ,"validate2":"Cannot leave fields blank."
		            ,"validate3":"Credentials do not match."
		            ,"validate4":"Something is wrong. Contact the administrator."
		            ,"validate5":"User account doesn't exist. Please register below."};
		            	       
	 getObject = localStorage.getItem('storeUser', credentialsjson);	
	 
	 if (getObject != null) {
	 
	 parseObject = JSON.parse(getObject);
	 
	 } else if (getObject == null && getUser == blank2 || getPass == blank2) {
	 	
	 	document.getElementById("validatemessage").style.color = "#FF8C00";
	 	document.getElementById("validatemessage").style.fontSize = "18px"
	  document.getElementById('validatemessage').innerHTML = validate.validate2;
	  
	 } else {
	 	
	 	document.getElementById("validatemessage").style.color ="#FF8C00";
	 	document.getElementById("validatemessage").style.fontSize = "18px"
	  document.getElementById('validatemessage').innerHTML = validate.validate5;
	 	
	 }
  
   console.log(parseObject);
	
	if (getUser == parseObject.user && getPass == parseObject.pass) {
		
	        loadingLink = document.getElementById("loadinglink");
      window.location.href = "#/loading";
   
  setTimeout(function() {

    	startLink = document.getElementById("startlink");
      window.location.href = "#/start";

  }, 2500 ); 
		
	} else if (getUser == blank2 || getPass == blank2) {
		
		document.getElementById("validatemessage").style.color ="#FF8C00";
		document.getElementById("validatemessage").style.fontSize = "18px"
	  document.getElementById('validatemessage').innerHTML = validate.validate2;
	  
	} else if (getUser != parseObject.user || getPass != parseObject) {
		
		document.getElementById("validatemessage").style.color ="#FF8C00";
		document.getElementById("validatemessage").style.fontSize = "18px"
	  document.getElementById('validatemessage').innerHTML = validate.validate3;
		
	} else {
		
		document.getElementById("validatemessage").style.color ="red";
		document.getElementById("validatemessage").style.fontSize = "18px"
	  document.getElementById('validatemessage').innerHTML = validate.validate4;
		
	}
	
	
}

window.onpopstate = function (e) { window.history.forward(1); }
		


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
  
  .when('/loading', {
  	templateUrl : 'view/loading.html',
  	controller : 'LoadingController'
  })
  
  .when('/play', {
  	templateUrl : 'view/play.html',
  	controller : 'PlayController'
  })

  .otherwise({redirectTo: '/'});
});

phonemeApp.controller('LoginController', function($scope) {

});

phonemeApp.controller('RegisterController', function($scope) {

});

phonemeApp.controller('LoadingController', function($scope) {

});

phonemeApp.controller('StartController', function($scope) {
	$scope.bgimg = "../images/start-page.png";
});

phonemeApp.controller('PlayController', function($scope) {
	$scope.bgimg = "../images/start-page.png";
});






