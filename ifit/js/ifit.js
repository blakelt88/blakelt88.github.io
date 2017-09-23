// Author: Blake Turley

function clicked() {
	document.getElementById("search").className = "move-box";
	document.getElementById("makex").innerHTML = "&#10006;";
	document.getElementById("makex").setAttribute("onClick","clickagain();");
}

function clickagain() {
	document.getElementById("search").className = "noshow";
	document.getElementById("makex").innerHTML = "&#128270;";
	document.getElementById("makex").setAttribute("onClick","clicked();");
}