// JavaScript Document

function main(rev){
	rev.reverse();
	for (var k in rev){
		var input = document.createElement('div');
		input.innerHTML=rev[k];
		input.style.border="solid";
		input.className="Comments";
		input.style.borderColor="#120987";
		document.getElementById("add").appendChild(input);
	}
	}
function nofound(no){
	document.getElementById("add").innerHTML = "No Reviews Found";
	}
