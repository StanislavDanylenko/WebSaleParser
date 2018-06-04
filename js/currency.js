var icons = document.querySelectorAll(".currency > div");

var btn = document.querySelector("#getData > span");
for(var i = 0; i < icons.length; i++){
	icons[i].addEventListener("click", function(){
		var pattern1 = /<svg/;
		var pattern2 = /svg>/;
		var start = this.outerHTML.search(pattern1);
		var end = this.outerHTML.search(pattern2);
		var str = this.outerHTML.substring(start, end);

		var c = document.querySelector('.current');

		c.classList.add('no-current');
		c.classList.remove('current');

		this.children[0].classList.add('current');

		
	})
}