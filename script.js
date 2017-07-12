	
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
   
  document.getElementById('register').className = "dontshow";
  
  document.getElementById('loading').className = "show"; 
   
  setTimeout(function() {
 
  document.getElementById('loading').className = "dontshow";

  }, 3000 ); 
  
    setTimeout(function() {
 
  document.getElementById('start').className = "show";
  document.getElementById('startmusic').play();

  }, 3001 ); 

	
	} else {
		document.getElementById('validatemessage2').innerHTML = "Nope.";
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
	 	document.getElementById("validatemessage").style.fontSize = "18px";
	  document.getElementById('validatemessage').innerHTML = validate.validate2;
	  
	 } else {
	 	
	 	document.getElementById("validatemessage").style.color ="#FF8C00";
	 	document.getElementById("validatemessage").style.fontSize = "18px";
	  document.getElementById('validatemessage').innerHTML = validate.validate5;
	 	
	 }
 
	if (getUser == parseObject.user && getPass == parseObject.pass) {
		
	document.getElementById('login').className = "dontshow";
  
  document.getElementById('loading').className = "show"; 
   
  setTimeout(function() {
 
  document.getElementById('loading').className = "dontshow";

  }, 3000 ); 
  
    setTimeout(function() {
 
  document.getElementById('start').className = "show";
  document.getElementById('startmusic').play();

  }, 3001 ); 
		
	} else if (getUser == blank2 || getPass == blank2) {
		
		document.getElementById("validatemessage").style.color ="#FF8C00";
		document.getElementById("validatemessage").style.fontSize = "18px";
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

function register() {
	document.getElementById('login').className = "dontshow";
	document.getElementById('register').className = "show";
}

function backhome() {
	document.getElementById('register').className = "dontshow";
	document.getElementById('login').className = "show";
}

function play() {
	document.getElementById('startmusic').pause();
	document.getElementById('start').className = "dontshow";
	document.getElementById('play').className = "show";
}


		








