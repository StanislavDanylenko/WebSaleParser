var currentArea = document.getElementById("selectArea").value;

document.getElementById("selectArea").onchange = function (event) {
	var area = this.value;

	document.querySelector(`#selectCity>optgroup[label="${currentArea}"]`).style.display = "none";
	document.querySelector(`#selectCity>optgroup[label="${area}"]`).style.display = "block";
	document.getElementById("selectCity").value = document.querySelector(`#selectCity>optgroup[label="${area}"]>option`).value;
	currentArea = area;
}