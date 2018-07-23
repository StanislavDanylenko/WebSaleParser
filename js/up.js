
var up = document.getElementById("up");
var upOff = false;
var key;

up.onclick = function (event){

	this.style.display = "none";

	key = setInterval(function(){
		upOff = true;

		if(window.scrollY > 0)
			scroll(0, window.scrollY - 25);
		else{
			clearInterval(key);
			upOff = false;
		}
	}, 1);

};

window.onmousewheel = function(){
	clearInterval(key);
	upOff = false;
}

window.onscroll = function (){

	if(!upOff)
		setTimeout(function(){
			if(window.scrollY > 300)
				up.style.display = "block";
			else
				up.style.display = "none";
		},
		100);
}
