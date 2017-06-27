// LOGIN and SIGNUP Authentication Logic


// Declare variables

var user = document.getElementById('user').value;
var pass = document.getElementById('pass').value;
var repass = document.getElementById('repass').value;

var nomatch = "Passwords do not match. Please try again.";
var amatch = "User account has been created.";

// Store username and password locally

function storeCredentials() {
	
	if (pass == repass) {
			
	localStorage.setItem('user', user);
	localStorage.getItem('pass', pass);
	
	  document.getElementById('validatemessage').innerHTML = amatch;
	
	} else {
		document.getElementById('validatemessage')innerHTML = nomatch;
	}

}