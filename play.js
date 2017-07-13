var row1box1,row1box2,row1box3,row1box4,row1box5,row1box6,row2box1,row2box2,row2box3,row2box4,row2box5,row2box6,row3box1,row3box2,row3box3,row3box4,row3box5,row3box6,row4box1,row4box2,row4box3,row4box4,row4box5,row4box6,row5box1,row5box2,row5box3,row5box4,row5box5,row5box6,row6box1,row6box2,row6box3,row6box4,row6box5,row6box6,row7box1,row7box2,row7box3,row7box4,row7box5,row7box6,row8box1,row8box2,row8box3,row8box4,row8box5,row8box6,row9box1,row9box2,row9box3,row9box4,row9box5,row9box6,row10box1,row10box2,row10box3,row10box4,row10box5,row10box6,row11box1,row11box2,row11box3,row11box4,row11box5,row11box6,row12box1,row12box2,row12box3,row12box4,row12box5,row12box6,row13box1,row13box2,row13box3,row13box4,row13box5,row13box6,row14box1,row14box2,row14box3,row14box4,row14box5,row14box6;

var reddot1,reddot2,reddot3,reddot4,reddot5,reddot6,reddot1,reddot2,reddot3,reddot4,reddot5,reddot6,reddot1,reddot2,reddot3,reddot4,reddot5,reddot6,reddot1,reddot2,reddot3,reddot4,reddot5,reddot6,reddot1,reddot2,reddot3,reddot4,reddot5,reddot6,reddot1,reddot2,reddot3,reddot4,reddot5,reddot6,reddot1,reddot2,reddot3,reddot4,reddot5,reddot6;

var book = "3";
var four = "2";
var flag = "4";
var ice = "2";
var glue = "3";
var fish = "3";
var belt = "4";
var mask = "4";
var lamp = "4";
var milk = "3";
var fan = "3";
var sun = "3";
var pig = "3";
var truck = "3";


var num1 = 0;
var num2 = 0;
var num3 = 0;
var num4 = 0;
var num5 = 0;
var num6 = 0;
var num7 = 0;
var num8 = 0;
var num9 = 0;
var num10 = 0;
var num11 = 0;
var num12 = 0;
var num13 = 0;
var num14 = 0;

/* Picture 1 */

function row1box1() {
    var x = document.getElementById('reddot1');
    if (x.style.display == 'none') {
        x.style.display = 'block';
      document.getElementById('total1').innerHTML = num1 += 1;
    } else {
        x.style.display = 'none';
       document.getElementById('total1').innerHTML = num1 -= 1;   
    }
}	

function row1box2() {
var x = document.getElementById('reddot2');
    if (x.style.display === 'none') {
        x.style.display = 'block';
      document.getElementById('total1').innerHTML = num1 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total1').innerHTML = num1 -= 1;
    }
}

function row1box3() {
var x = document.getElementById('reddot3');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total1').innerHTML = num1 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total1').innerHTML = num1 -= 1;
    }
}

function row1box4() {
var x = document.getElementById('reddot4');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total1').innerHTML = num1 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total1').innerHTML = num1 -= 1;
    }
}

function row1box5() {
var x = document.getElementById('reddot5');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total1').innerHTML = num1 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total1').innerHTML = num1 -= 1;
    }
}

function row1box6() {
var x = document.getElementById('reddot6');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total1').innerHTML = num1 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total1').innerHTML = num1 -= 1;
    }
}

function verifyanswer1() {
	if (book == total1.innerText) {
		
	  document.getElementById('confetti').className = "showconfetti";
		
		setTimeout(function() {
			
    document.getElementById('yay').play();

  }, 500); 
		
		setTimeout(function() {

  	document.getElementById('confetti').className = "dontshow";
  	document.getElementById('secondsheet').className = "show";
  	
  	document.getElementById('book').className = "dontshow";
  	document.getElementById('four').className = "show";
  	document.getElementById('submit1').className = "dontshow";
  	document.getElementById('submit2').className = "show";
  	document.getElementById("firstsheet").style.pointerEvents = "none";

  }, 4000 ); 
		
	} else {
	
		document.getElementById('incorrect').play();	
		document.getElementById('sorry').className = "show";
		
		
		setTimeout(function() {
 
  	document.getElementById('sorry').className = "dontshow";	

  }, 4000 ); 


	}
}

/* Picture Two */

function row2box1() {
    var x = document.getElementById('reddot7');
    if (x.style.display == 'none') {
        x.style.display = 'block';
      document.getElementById('total2').innerHTML = num2 += 1;
    } else {
        x.style.display = 'none';
       document.getElementById('total2').innerHTML = num2 -= 1;   
    }
}	

function row2box2() {
var x = document.getElementById('reddot8');
    if (x.style.display === 'none') {
        x.style.display = 'block';
      document.getElementById('total2').innerHTML = num2 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total2').innerHTML = num2 -= 1;
    }
}

function row2box3() {
var x = document.getElementById('reddot9');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total2').innerHTML = num2 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total2').innerHTML = num2 -= 1;
    }
}

function row2box4() {
var x = document.getElementById('reddot10');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total2').innerHTML = num2 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total2').innerHTML = num2 -= 1;
    }
}

function row2box5() {
var x = document.getElementById('reddot11');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total2').innerHTML = num2 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total2').innerHTML = num2 -= 1;
    }
}

function row2box6() {
var x = document.getElementById('reddot12');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total2').innerHTML = num2 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total2').innerHTML = num2 -= 1;
    }
}

function verifyanswer2() {
	if (four == total2.innerText) {
		
	  document.getElementById('confetti').className = "showconfetti";
		
		setTimeout(function() {
			
		document.getElementById('yay2').play();	

  }, 500); 
		
		setTimeout(function() {

  	document.getElementById('confetti').className = "dontshow";
  	document.getElementById('thirdsheet').className = "show";
  	document.getElementById('four').className = "dontshow";
  	document.getElementById('flag').className = "show";
  	document.getElementById('submit2').className = "dontshow";
  	document.getElementById('submit3').className = "show";
  	document.getElementById("secondsheet").style.pointerEvents = "none";

  }, 4000 ); 
		
	} else {
		
		document.getElementById('sorry').className = "show";
		document.getElementById('incorrect2').play();
		
		
		setTimeout(function() {
 
  	document.getElementById('sorry').className = "dontshow";	

  }, 4000 ); 


	}
}

/* Picture Three */

function row3box1() {
    var x = document.getElementById('reddot13');
    if (x.style.display == 'none') {
        x.style.display = 'block';
      document.getElementById('total3').innerHTML = num3 += 1;
    } else {
        x.style.display = 'none';
       document.getElementById('total3').innerHTML = num3 -= 1;   
    }
}	

function row3box2() {
var x = document.getElementById('reddot14');
    if (x.style.display === 'none') {
        x.style.display = 'block';
      document.getElementById('total3').innerHTML = num3 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total3').innerHTML = num3 -= 1;
    }
}

function row3box3() {
var x = document.getElementById('reddot15');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total3').innerHTML = num3 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total3').innerHTML = num3 -= 1;
    }
}

function row3box4() {
var x = document.getElementById('reddot16');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total3').innerHTML = num3 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total3').innerHTML = num3 -= 1;
    }
}

function row3box5() {
var x = document.getElementById('reddot17');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total3').innerHTML = num3 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total3').innerHTML = num3 -= 1;
    }
}

function row3box6() {
var x = document.getElementById('reddot18');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total3').innerHTML = num3 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total3').innerHTML = num3 -= 1;
    }
}

function verifyanswer3() {
	if (flag == total3.innerText) {
		
	  document.getElementById('confetti').className = "showconfetti";
		
		setTimeout(function() {
			
    document.getElementById('yay3').play();

  }, 500); 
		
		setTimeout(function() {

    document.getElementById('confetti').className = "dontshow";
  	document.getElementById('fourthsheet').className = "show";
  	document.getElementById('flag').className = "dontshow";
  	document.getElementById('ice').className = "show";
  	document.getElementById('submit3').className = "dontshow";
  	document.getElementById('submit4').className = "show";
  	document.getElementById("thirdsheet").style.pointerEvents = "none";

  }, 4000 ); 
		
	} else {
		
		document.getElementById('sorry').className = "show";
		document.getElementById('incorrect3').play();
		
		setTimeout(function() {
 
  	document.getElementById('sorry').className = "dontshow";	

  }, 4000 ); 


	}
}

/* Picture Four */

function row4box1() {
    var x = document.getElementById('reddot19');
    if (x.style.display == 'none') {
        x.style.display = 'block';
      document.getElementById('total4').innerHTML = num4 += 1;
    } else {
        x.style.display = 'none';
       document.getElementById('total4').innerHTML = num4 -= 1;   
    }
}	

function row4box2() {
var x = document.getElementById('reddot20');
    if (x.style.display === 'none') {
        x.style.display = 'block';
      document.getElementById('total4').innerHTML = num4 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total4').innerHTML = num4 -= 1;
    }
}

function row4box3() {
var x = document.getElementById('reddot21');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total4').innerHTML = num4 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total4').innerHTML = num4 -= 1;
    }
}

function row4box4() {
var x = document.getElementById('reddot22');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total4').innerHTML = num4 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total4').innerHTML = num4 -= 1;
    }
}

function row4box5() {
var x = document.getElementById('reddot23');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total4').innerHTML = num4 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total4').innerHTML = num4 -= 1;
    }
}

function row4box6() {
var x = document.getElementById('reddot24');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total4').innerHTML = num4 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total4').innerHTML = num4 -= 1;
    }
}

function verifyanswer4() {
	if (ice == total4.innerText) {
		
	  document.getElementById('confetti').className = "showconfetti";
		
		setTimeout(function() {
			
    document.getElementById('yay4').play();

  }, 500); 
		
		setTimeout(function() {

  	document.getElementById('confetti').className = "dontshow";        
  	document.getElementById('fifthsheet').className = "show";         
  	document.getElementById('ice').className = "dontshow";            
  	document.getElementById('glue').className = "show";                 
  	document.getElementById('submit4').className = "dontshow";         
  	document.getElementById('submit5').className = "show";             
  	document.getElementById("fourthsheet").style.pointerEvents = "none";


  }, 4000 ); 
		
	} else {
		
		document.getElementById('sorry').className = "show";
		document.getElementById('incorrect4').play();
		
		setTimeout(function() {
 
  	document.getElementById('sorry').className = "dontshow";	

  }, 4000 ); 


	}
}

/* Picture Five */

function row5box1() {
    var x = document.getElementById('reddot25');
    if (x.style.display == 'none') {
        x.style.display = 'block';
      document.getElementById('total5').innerHTML = num5 += 1;
    } else {
        x.style.display = 'none';
       document.getElementById('total5').innerHTML = num5 -= 1;   
    }
}	

function row5box2() {
var x = document.getElementById('reddot26');
    if (x.style.display === 'none') {
        x.style.display = 'block';
      document.getElementById('total5').innerHTML = num5 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total5').innerHTML = num5 -= 1;
    }
}

function row5box3() {
var x = document.getElementById('reddot27');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total5').innerHTML = num5 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total5').innerHTML = num5 -= 1;
    }
}

function row5box4() {
var x = document.getElementById('reddot28');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total5').innerHTML = num5 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total5').innerHTML = num5 -= 1;
    }
}

function row5box5() {
var x = document.getElementById('reddot29');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total5').innerHTML = num5 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total5').innerHTML = num5 -= 1;
    }
}

function row5box6() {
var x = document.getElementById('reddot30');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total5').innerHTML = num5 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total5').innerHTML = num5 -= 1;
    }
}

function verifyanswer5() {
	if (glue == total5.innerText) {
		
	  document.getElementById('confetti').className = "showconfetti";
		
		setTimeout(function() {
			
    document.getElementById('yay5').play();

  }, 500); 
		
		setTimeout(function() {

  	document.getElementById('confetti').className = "dontshow";        
  	document.getElementById('sixthsheet').className = "show";         
  	document.getElementById('glue').className = "dontshow";            
  	document.getElementById('fish').className = "show";                 
  	document.getElementById('submit5').className = "dontshow";         
  	document.getElementById('submit6').className = "show";             
  	document.getElementById("fifthsheet").style.pointerEvents = "none";

  }, 4000 ); 
		
	} else {
		
		document.getElementById('sorry').className = "show";
		document.getElementById('incorrect5').play();
		
		setTimeout(function() {
 
  	document.getElementById('sorry').className = "dontshow";	

  }, 4000 ); 


	}
}

/* Picture Six */

function row6box1() {
    var x = document.getElementById('reddot31');
    if (x.style.display == 'none') {
        x.style.display = 'block';
      document.getElementById('total6').innerHTML = num6 += 1;
    } else {
        x.style.display = 'none';
       document.getElementById('total6').innerHTML = num6 -= 1;   
    }
}	

function row6box2() {
var x = document.getElementById('reddot32');
    if (x.style.display === 'none') {
        x.style.display = 'block';
      document.getElementById('total6').innerHTML = num6 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total6').innerHTML = num6 -= 1;
    }
}

function row6box3() {
var x = document.getElementById('reddot33');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total6').innerHTML = num6 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total6').innerHTML = num6 -= 1;
    }
}

function row6box4() {
var x = document.getElementById('reddot34');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total6').innerHTML = num6 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total6').innerHTML = num6 -= 1;
    }
}

function row6box5() {
var x = document.getElementById('reddot35');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total6').innerHTML = num6 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total6').innerHTML = num6 -= 1;
    }
}

function row6box6() {
var x = document.getElementById('reddot36');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total6').innerHTML = num6 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total6').innerHTML = num6 -= 1;
    }
}

function verifyanswer6() {
	if (fish == total6.innerText) {
		
	  document.getElementById('confetti').className = "showconfetti";
		
		setTimeout(function() {
			
    document.getElementById('yay6').play();

  }, 500); 
		
		setTimeout(function() {

  	document.getElementById('confetti').className = "dontshow";        
  	document.getElementById('seventhsheet').className = "show";         
  	document.getElementById('fish').className = "dontshow";            
  	document.getElementById('belt').className = "show";                 
  	document.getElementById('submit6').className = "dontshow";         
  	document.getElementById('submit7').className = "show";             
  	document.getElementById("sixthsheet").style.pointerEvents = "none";

  }, 4000 ); 
		
	} else {
		
		document.getElementById('sorry').className = "show";
		document.getElementById('incorrect6').play();
		
		setTimeout(function() {
 
  	document.getElementById('sorry').className = "dontshow";	

  }, 4000 ); 


	}
}



/* Picture Seven */

function row7box1() {
    var x = document.getElementById('reddot37');
    if (x.style.display == 'none') {
        x.style.display = 'block';
      document.getElementById('total7').innerHTML = num7 += 1;
    } else {
        x.style.display = 'none';
       document.getElementById('total7').innerHTML = num7 -= 1;   
    }
}	

function row7box2() {
var x = document.getElementById('reddot38');
    if (x.style.display === 'none') {
        x.style.display = 'block';
      document.getElementById('total7').innerHTML = num7 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total7').innerHTML = num7 -= 1;
    }
}

function row7box3() {
var x = document.getElementById('reddot39');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total7').innerHTML = num7 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total7').innerHTML = num7 -= 1;
    }
}

function row7box4() {
var x = document.getElementById('reddot40');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total7').innerHTML = num7 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total7').innerHTML = num7 -= 1;
    }
}

function row7box5() {
var x = document.getElementById('reddot41');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total7').innerHTML = num7 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total7').innerHTML = num7 -= 1;
    }
}

function row7box6() {
var x = document.getElementById('reddot42');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total7').innerHTML = num7 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total7').innerHTML = num7 -= 1;
    }
}

function verifyanswer7() {
	if (belt == total7.innerText) {
		
	  document.getElementById('confetti').className = "showconfetti";
		
		setTimeout(function() {
			
    document.getElementById('yay7').play();

  }, 500); 
		
		setTimeout(function() {

  	document.getElementById('confetti').className = "dontshow";        
  	document.getElementById('eighthsheet').className = "show";         
  	document.getElementById('belt').className = "dontshow";            
  	document.getElementById('mask').className = "show";                 
  	document.getElementById('submit7').className = "dontshow";         
  	document.getElementById('submit8').className = "show";             
  	document.getElementById("seventhsheet").style.pointerEvents = "none";

  }, 4000 ); 
		
	} else {
		
		document.getElementById('sorry').className = "show";
		document.getElementById('incorrect7').play();
		
		setTimeout(function() {
 
  	document.getElementById('sorry').className = "dontshow";	

  }, 4000 ); 


	}
}

/* Picture Eight */

function row8box1() {
    var x = document.getElementById('reddot43');
    if (x.style.display == 'none') {
        x.style.display = 'block';
      document.getElementById('total8').innerHTML = num8 += 1;
    } else {
        x.style.display = 'none';
       document.getElementById('total8').innerHTML = num8 -= 1;   
    }
}	

function row8box2() {
var x = document.getElementById('reddot44');
    if (x.style.display === 'none') {
        x.style.display = 'block';
      document.getElementById('total8').innerHTML = num8 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total8').innerHTML = num8 -= 1;
    }
}

function row8box3() {
var x = document.getElementById('reddot45');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total8').innerHTML = num8 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total8').innerHTML = num8 -= 1;
    }
}

function row8box4() {
var x = document.getElementById('reddot46');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total8').innerHTML = num8 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total8').innerHTML = num8 -= 1;
    }
}

function row8box5() {
var x = document.getElementById('reddot47');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total8').innerHTML = num8 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total8').innerHTML = num8 -= 1;
    }
}

function row8box6() {
var x = document.getElementById('reddot48');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total8').innerHTML = num8 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total8').innerHTML = num8 -= 1;
    }
}

function verifyanswer8() {
	if (mask == total8.innerText) {
		
	  document.getElementById('confetti').className = "showconfetti";
		
		setTimeout(function() {
			
    document.getElementById('yay8').play();

  }, 500); 
		
		setTimeout(function() {

  	document.getElementById('confetti').className = "dontshow";        
  	document.getElementById('ninthsheet').className = "show";         
  	document.getElementById('mask').className = "dontshow";            
  	document.getElementById('lamp').className = "show";                 
  	document.getElementById('submit8').className = "dontshow";         
  	document.getElementById('submit9').className = "show";             
  	document.getElementById("eighthsheet").style.pointerEvents = "none";

  }, 4000 ); 
		
	} else {
		
		document.getElementById('sorry').className = "show";
		document.getElementById('incorrect8').play();
		
		setTimeout(function() {
 
  	document.getElementById('sorry').className = "dontshow";	

  }, 4000 ); 


	}
}

/* Picture Ninth */

function row9box1() {
    var x = document.getElementById('reddot49');
    if (x.style.display == 'none') {
        x.style.display = 'block';
      document.getElementById('total9').innerHTML = num9 += 1;
    } else {
        x.style.display = 'none';
       document.getElementById('total9').innerHTML = num9 -= 1;   
    }
}	

function row9box2() {
var x = document.getElementById('reddot50');
    if (x.style.display === 'none') {
        x.style.display = 'block';
      document.getElementById('total9').innerHTML = num9 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total9').innerHTML = num9 -= 1;
    }
}

function row9box3() {
var x = document.getElementById('reddot51');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total9').innerHTML = num9 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total9').innerHTML = num9 -= 1;
    }
}

function row9box4() {
var x = document.getElementById('reddot52');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total9').innerHTML = num9 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total9').innerHTML = num9 -= 1;
    }
}

function row9box5() {
var x = document.getElementById('reddot53');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total9').innerHTML = num9 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total9').innerHTML = num9 -= 1;
    }
}

function row9box6() {
var x = document.getElementById('reddot54');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total9').innerHTML = num9 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total9').innerHTML = num9 -= 1;
    }
}

function verifyanswer9() {
	if (lamp == total9.innerText) {
		
	  document.getElementById('confetti').className = "showconfetti";
		
		setTimeout(function() {
			
    document.getElementById('yay9').play();

  }, 500); 
		
		setTimeout(function() {

  	document.getElementById('confetti').className = "dontshow";        
  	document.getElementById('tenthsheet').className = "show";         
  	document.getElementById('lamp').className = "dontshow";            
  	document.getElementById('milk').className = "show";                 
  	document.getElementById('submit9').className = "dontshow";         
  	document.getElementById('submit10').className = "show";             
  	document.getElementById("ninthsheet").style.pointerEvents = "none";

  }, 4000 ); 
		
	} else {
		
		document.getElementById('sorry').className = "show";
		document.getElementById('incorrect9').play();
		
		setTimeout(function() {
 
  	document.getElementById('sorry').className = "dontshow";	

  }, 4000 ); 


	}
}

/* Picture Tenth */

function row10box1() {
    var x = document.getElementById('reddot55');
    if (x.style.display == 'none') {
        x.style.display = 'block';
      document.getElementById('total10').innerHTML = num10 += 1;
    } else {
        x.style.display = 'none';
       document.getElementById('total10').innerHTML = num10 -= 1;   
    }
}	

function row10box2() {
var x = document.getElementById('reddot56');
    if (x.style.display === 'none') {
        x.style.display = 'block';
      document.getElementById('total10').innerHTML = num10 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total10').innerHTML = num10 -= 1;
    }
}

function row10box3() {
var x = document.getElementById('reddot57');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total10').innerHTML = num10 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total10').innerHTML = num10 -= 1;
    }
}

function row10box4() {
var x = document.getElementById('reddot58');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total10').innerHTML = num10 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total10').innerHTML = num10 -= 1;
    }
}

function row10box5() {
var x = document.getElementById('reddot59');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total10').innerHTML = num10 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total10').innerHTML = num10 -= 1;
    }
}

function row10box6() {
var x = document.getElementById('reddot60');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total10').innerHTML = num10 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total10').innerHTML = num10 -= 1;
    }
}

function verifyanswer10() {
	if (milk == total10.innerText) {
		
	  document.getElementById('confetti').className = "showconfetti";
		
		setTimeout(function() {
			
    document.getElementById('yay10').play();

  }, 500); 
		
		setTimeout(function() {

  	document.getElementById('confetti').className = "dontshow";        
  	document.getElementById('eleventhsheet').className = "show";         
  	document.getElementById('milk').className = "dontshow";            
  	document.getElementById('fan').className = "show";                 
  	document.getElementById('submit10').className = "dontshow";         
  	document.getElementById('submit11').className = "show";             
  	document.getElementById("tenthsheet").style.pointerEvents = "none";

  }, 4000 ); 
		
	} else {
		
		document.getElementById('sorry').className = "show";
		document.getElementById('incorrect10').play();
		
		setTimeout(function() {
 
  	document.getElementById('sorry').className = "dontshow";	

  }, 4000 ); 


	}
}

/* Picture Eleventh */

function row11box1() {
    var x = document.getElementById('reddot61');
    if (x.style.display == 'none') {
        x.style.display = 'block';
      document.getElementById('total11').innerHTML = num11 += 1;
    } else {
        x.style.display = 'none';
       document.getElementById('total11').innerHTML = num11 -= 1;   
    }
}	

function row11box2() {
var x = document.getElementById('reddot62');
    if (x.style.display === 'none') {
        x.style.display = 'block';
      document.getElementById('total11').innerHTML = num11 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total11').innerHTML = num11 -= 1;
    }
}

function row11box3() {
var x = document.getElementById('reddot63');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total11').innerHTML = num11 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total11').innerHTML = num11 -= 1;
    }
}

function row11box4() {
var x = document.getElementById('reddot64');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total11').innerHTML = num11 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total11').innerHTML = num11 -= 1;
    }
}

function row11box5() {
var x = document.getElementById('reddot65');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total11').innerHTML = num11 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total11').innerHTML = num11 -= 1;
    }
}

function row11box6() {
var x = document.getElementById('reddot66');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total11').innerHTML = num11 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total11').innerHTML = num11 -= 1;
    }
}

function verifyanswer11() {
	if (fan == total11.innerText) {
		
	  document.getElementById('confetti').className = "showconfetti";
		
		setTimeout(function() {
			
    document.getElementById('yay11').play();

  }, 500); 
		
		setTimeout(function() {

  	document.getElementById('confetti').className = "dontshow";        
  	document.getElementById('twelvthsheet').className = "show";         
  	document.getElementById('fan').className = "dontshow";            
  	document.getElementById('sun').className = "show";                 
  	document.getElementById('submit11').className = "dontshow";         
  	document.getElementById('submit12').className = "show";             
  	document.getElementById("eleventhsheet").style.pointerEvents = "none";

  }, 4000 ); 
		
	} else {
		
		document.getElementById('sorry').className = "show";
		document.getElementById('incorrect11').play();
		
		setTimeout(function() {
 
  	document.getElementById('sorry').className = "dontshow";	

  }, 4000 ); 


	}
}

/* Picture Twelvth */

function row12box1() {
    var x = document.getElementById('reddot67');
    if (x.style.display == 'none') {
        x.style.display = 'block';
      document.getElementById('total12').innerHTML = num12 += 1;
    } else {
        x.style.display = 'none';
       document.getElementById('total12').innerHTML = num12 -= 1;   
    }
}	

function row12box2() {
var x = document.getElementById('reddot68');
    if (x.style.display === 'none') {
        x.style.display = 'block';
      document.getElementById('total12').innerHTML = num12 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total12').innerHTML = num12 -= 1;
    }
}

function row12box3() {
var x = document.getElementById('reddot69');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total12').innerHTML = num12 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total12').innerHTML = num12 -= 1;
    }
}

function row12box4() {
var x = document.getElementById('reddot70');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total12').innerHTML = num12 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total12').innerHTML = num12 -= 1;
    }
}

function row12box5() {
var x = document.getElementById('reddot71');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total12').innerHTML = num12 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total12').innerHTML = num12 -= 1;
    }
}

function row12box6() {
var x = document.getElementById('reddot72');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total12').innerHTML = num12 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total12').innerHTML = num12 -= 1;
    }
}

function verifyanswer12() {
	if (sun == total12.innerText) {
		
	  document.getElementById('confetti').className = "showconfetti";
		
		setTimeout(function() {
			
    document.getElementById('yay12').play();

  }, 500); 
		
		setTimeout(function() {

  	document.getElementById('confetti').className = "dontshow";        
  	document.getElementById('thirteenthsheet').className = "show";         
  	document.getElementById('sun').className = "dontshow";            
  	document.getElementById('pig').className = "show";                 
  	document.getElementById('submit12').className = "dontshow";         
  	document.getElementById('submit13').className = "show";             
  	document.getElementById("twelvthsheet").style.pointerEvents = "none";

  }, 4000 ); 
		
	} else {
		
		document.getElementById('sorry').className = "show";
		document.getElementById('incorrect12').play();
		
		setTimeout(function() {
 
  	document.getElementById('sorry').className = "dontshow";	

  }, 4000 ); 


	}
}

/* Picture Thirtheenth */

function row13box1() {
    var x = document.getElementById('reddot73');
    if (x.style.display == 'none') {
        x.style.display = 'block';
      document.getElementById('total13').innerHTML = num13 += 1;
    } else {
        x.style.display = 'none';
       document.getElementById('total13').innerHTML = num13 -= 1;   
    }
}	

function row13box2() {
var x = document.getElementById('reddot74');
    if (x.style.display === 'none') {
        x.style.display = 'block';
      document.getElementById('total13').innerHTML = num13 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total13').innerHTML = num13 -= 1;
    }
}

function row13box3() {
var x = document.getElementById('reddot75');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total13').innerHTML = num13 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total13').innerHTML = num13 -= 1;
    }
}

function row13box4() {
var x = document.getElementById('reddot76');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total13').innerHTML = num13 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total13').innerHTML = num13 -= 1;
    }
}

function row13box5() {
var x = document.getElementById('reddot77');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total13').innerHTML = num13 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total13').innerHTML = num13 -= 1;
    }
}

function row13box6() {
var x = document.getElementById('reddot78');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total13').innerHTML = num13 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total13').innerHTML = num13 -= 1;
    }
}

function verifyanswer13() {
	if (pig == total13.innerText) {
		
	  document.getElementById('confetti').className = "showconfetti";
		
		setTimeout(function() {
			
    document.getElementById('yay13').play();

  }, 500); 
		
		setTimeout(function() {

  	document.getElementById('confetti').className = "dontshow";        
  	document.getElementById('fourteenthsheet').className = "show";         
  	document.getElementById('pig').className = "dontshow";            
  	document.getElementById('truck').className = "show";                 
  	document.getElementById('submit13').className = "dontshow";         
  	document.getElementById('submit14').className = "show";             
  	document.getElementById("thirteenthsheet").style.pointerEvents = "none";

  }, 4000 ); 
		
	} else {
		
		document.getElementById('sorry').className = "show";
		document.getElementById('incorrect13').play();
		
		setTimeout(function() {
 
  	document.getElementById('sorry').className = "dontshow";	

  }, 4000 ); 


	}
}

/* Picture Fourteenth */

function row14box1() {
    var x = document.getElementById('reddot79');
    if (x.style.display == 'none') {
        x.style.display = 'block';
      document.getElementById('total14').innerHTML = num14 += 1;
    } else {
        x.style.display = 'none';
       document.getElementById('total14').innerHTML = num14 -= 1;   
    }
}	

function row14box2() {
var x = document.getElementById('reddot80');
    if (x.style.display === 'none') {
        x.style.display = 'block';
      document.getElementById('total14').innerHTML = num14 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total14').innerHTML = num14 -= 1;
    }
}

function row14box3() {
var x = document.getElementById('reddot81');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total14').innerHTML = num14 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total14').innerHTML = num14 -= 1;
    }
}

function row14box4() {
var x = document.getElementById('reddot82');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total14').innerHTML = num14 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total14').innerHTML = num14 -= 1;
    }
}

function row14box5() {
var x = document.getElementById('reddot83');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total14').innerHTML = num14 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total14').innerHTML = num14 -= 1;
    }
}

function row14box6() {
var x = document.getElementById('reddot84');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        document.getElementById('total14').innerHTML = num14 += 1;
    } else {
        x.style.display = 'none';
        document.getElementById('total14').innerHTML = num14 -= 1;
    }
}

function verifyanswer14() {
	if (pig == total14.innerText) {
		
	  document.getElementById('confetti').className = "showconfetti";
		
		setTimeout(function() {
			
    document.getElementById('yay14').play();

  }, 500); 
		
		setTimeout(function() {

  	document.getElementById('confetti').className = "dontshow";                                    
  	document.getElementById("thirteenthsheet").style.pointerEvents = "none";
  	document.getElementById("fourteenthsheet").style.pointerEvents = "none";

  }, 4000 ); 
		
	} else {
		
		document.getElementById('incorrect14').play();
		document.getElementById('sorry').className = "show";
		
		setTimeout(function() {
 
  	document.getElementById('sorry').className = "dontshow";	

  }, 4000 ); 


	}
}

