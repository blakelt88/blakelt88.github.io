// LOGIN and SIGNUP Authentication Logic

function storeCredentials() {
	
	// Declare variables

  var user = document.getElementById('user').value;
  var pass = document.getElementById('pass').value;
  var repass = document.getElementById('repass').value;
  var blank = "";
  
  var message = {"message1":"User account has been created"
		            ,"message2":"Cannot leave fields blank"
		            ,"message3":"Passwords do not match. Please try again"
		            ,"message4":"Something is wrong. Contact the administrator"};
  
	// Store username and password locally
	
	if (pass != blank && repass != blank && pass == repass && user != blank) {
	
	var credentials = {"user":user
		                ,"pass":pass};
		                
	var credentialsjson = JSON.stringify(credentials);
			
	localStorage.setItem('storeUser', credentialsjson);	
		
		document.getElementById("validatemessage").style.color ="green";
	  document.getElementById('validatemessage').innerHTML = message.message1;
	
	} else if (user == blank || pass == blank || repass == blank) {
		
		document.getElementById("validatemessage").style.color ="orange";
		document.getElementById('validatemessage').innerHTML = message.message2;
		
	} else if (pass != repass) {
		
		document.getElementById("validatemessage").style.color = "orange";
		document.getElementById('validatemessage').innerHTML = message.message3;
		
	} else {
		
		document.getElementById("validatemessage").style.color = "red";
		document.getElementById('validatemessage').innerHTML = message.message4;
		
	}

}
