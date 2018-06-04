function getAutoMove(){
	var key;

	return function(){
		clearInterval(key);

		key = setInterval(function(){
			move(true);
		}, 10000);
	}
}

function move(next){
	var images = document.querySelectorAll('.slider_content > a');
	var dotes = document.querySelector('.current-item').children;
	var cur = document.querySelector('.slider_content > .content_current');
	var curItem = document.querySelector('.current-item > .current_dote');
	
	cur.classList.remove('content_current');
	curItem.classList.remove('current_dote');

	var index = (next) ?  images.length - 1 : 0;

	if(cur != images[index]){
		var seek = index ? 1 : -1; 

		for (var i = 0; i < images.length; i++) {
			if(cur == images[i]){
				images[i + seek].classList.add('content_current');
				dotes[i  + seek].classList.add('current_dote');

				break;
			}
		}

	} else{
		dotes[dotes.length - 1 - index].classList.add('current_dote');
		images[images.length - 1 - index].classList.add('content_current');
	}

}

function choose(e){
	var images = document.querySelectorAll('.slider_content > a');	
	var dotes = document.querySelector('.current-item').children;
	var cur = document.querySelector('.slider_content > .content_current');
	var curItem = document.querySelector('.current-item > .current_dote');

	cur.classList.remove('content_current');
	curItem.classList.remove('current_dote');

	for(var i = 0; i < dotes.length; i++){
		if(dotes[i] == e){
			images[i].classList.add('content_current');
			dotes[i].classList.add('current_dote');
		}
	}
}


window.addEventListener('load', function(){

	(function(){
		var imgNum = document.querySelectorAll('.slider_content > a').length;
		var dotesContainer = document.querySelector('.current-item');
		var el;

		while(imgNum--){
			el = document.createElement('div');
			el.classList.add('dote');
			dotesContainer.appendChild(el);
		}

		dotesContainer.children[0].classList.add('current_dote');
	})();

	var autoMove = getAutoMove();

	autoMove();

	document.getElementById('next').onclick = function(){move(true); autoMove();};

	document.getElementById('prev').onclick = function(){move(false); autoMove();};

	var dotes = document.querySelector('.current-item').children;

	for(var i = 0; i < dotes.length; i++){
		dotes[i].addEventListener('click', function(){choose(this), autoMove()});
	}
});







