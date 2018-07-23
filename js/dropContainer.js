var container = document.getElementById("itemsContainer");
var showToggle = true;

document.getElementById("arrowDrop").onclick = function (){
	document.getElementById('itemscont').classList.toggle('open');
	if(showToggle){
		container.style.opacity = 1;
		this.style.transform = "rotate(180deg)";
	}
	else{
		container.style.opacity = 0;
		this.style.transform = "rotate(0deg)";
	}

	showToggle = !showToggle;

	this.style.transition = "transform 1s";
	container.style.transition = "opacity 1s";
	location.href = '#' + 'resultFoto';
}
