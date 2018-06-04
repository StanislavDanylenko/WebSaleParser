let captions = document.getElementsByClassName("caption");
let logos = document.getElementsByClassName("resLogo");
let descriptions = document.getElementsByClassName("description");

document.getElementById('getData').onclick = function (e) {
	var elements = document.forms[0];

	let obj = {
		/*building: elements.building.value,
		operation: elements.operation.value,
		area: elements.area.value,
		location: 'location',
		city: elements.area.value,
		floor1: elements.floor1.value,
		floor2: elements.floor2.value,
		floor3: elements.floor3.value,
		floor4: elements.floor4.value,
		areaSize1: elements['area-size1'].value,
		areaSize2: elements['area-size2'].value,
		numberOfRoom1: elements['numberOfRoom1'].value,
		numberOfRoom2: elements['numberOfRoom2'].value*/
		location:'rov',
        typeBuild:'house',
        buyRent:'rent',
        floorCountMin:'1',
        floorCountMax:'4',
        floorMin:'1',
        floorMax:'4',
        roomNumberMin:'1',
        roomNumberMax:'3',
        areaMin:'1',
        areaMax:'100',
        priceType:'USD',
        countRequest:'17'
	}
    var str_json = JSON.stringify(obj);
    
	var xhr = (window.XMLHttpRequest)? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");

	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
		    
		   console.log(xhr.responseText);
		   
			//let elements = JSON.parse(xhr.responseText);
			//console.log(elements[1]);

			/*let c = 0;

			for (let el of captions) {
				el.textContent = elements[c++].headline;
			}

			c = 0;

			for (let el of logos) {
				let img = document.createElement("img");
				img.src = elements[c++].photo;
				el.innerHTML = "";
				el.appendChild(img);
			}

			c = 0;

			for (let el of descriptions) {
				el.textContent = elements[c++].description;
			}*/

		}
	};

	xhr.open("POST", '../index2.php', true);

	xhr.send(str_json);

	e.preventDefault();
}

