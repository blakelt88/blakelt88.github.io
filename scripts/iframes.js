function remove_uglywhite() {
    var body = document.getElementById('body');
	var divs = body.getElementsByTagName("div");
	var div;
	for (i = 0; i < divs.length; i++){
	  div = divs[i];
	  if(div.id=='tryitLeaderboard'){
	  	**div.style.display = "none";**
	  }
	}
};

function doRemove() {
    document.frame.document.getElementById('iframe').remove_elemment();
}();