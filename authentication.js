// LOGIN and SIGNUP Authentication Logic

var user,pass,repass,blank,blank2,message,credententials,credentialsjson,getUser,getPass,validate,getObject,parseObject;



function storeCredentials() {
	
	// Declare variables

   user = document.getElementById('user').value;
   pass = document.getElementById('pass').value;
   repass = document.getElementById('repass').value;
   blank = "";
  
   message = {"message1":"User account has been created"
		            ,"message2":"Cannot leave fields blank"
		            ,"message3":"Passwords do not match. Please try again"
		            ,"message4":"Something is wrong. Contact the administrator"};
  
	// Store username and password locally
	
	if (pass != blank && repass != blank && pass == repass && user != blank) {
	
	 credentials = {"user":user
		                ,"pass":pass};
		                
	 credentialsjson = JSON.stringify(credentials);
			
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

function getCredentials() {
	
	 getUser = document.getElementById('getUser').value;
   getPass = document.getElementById('getPass').value;
   blank2 = ""; 
  
   validate ={"validate1":"Login Successful. Welcome "
		            ,"validate2":"Cannot leave fields blank"
		            ,"validate3":"Credentials do not match"
		            ,"validate4":"Something is wrong. Contact the administrator"};
		            	       
	 getObject = localStorage.getItem('storeUser', credentialsjson);	
	 
	 parseObject = JSON.parse(getObject);
  
  console.log(parseObject);
	
	if (getUser === parseObject.user && getPass === parseObject.pass) {
		
		document.getElementById("validatemessage").style.color ="green";
	  document.getElementById('validatemessage').innerHTML = validate.validate1 + parseObject.user;
		
	} else if (user === blank2 || pass === blank2 || repass === blank2) {
		
		document.getElementById("validatemessage").style.color ="orange";
	  document.getElementById('validatemessage').innerHTML = validate.validate2;
	  
	} else if (getUser !== parseObject.user || getPass !== parseObject) {
		
		document.getElementById("validatemessage").style.color ="orange";
	  document.getElementById('validatemessage').innerHTML = validate.validate3;
		
	} else {
		
		document.getElementById("validatemessage").style.color ="red";
	  document.getElementById('validatemessage').innerHTML = validate.validate4;
		
	}
	
}
