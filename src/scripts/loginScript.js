const inputs = document.querySelectorAll(".txtbxFields");
const toggle_btn = document.querySelectorAll(".toggle");
const main = document.querySelector("main");
const bullets = document.querySelectorAll(".bullets span");
const images = document.querySelectorAll(".image");

inputs.forEach((inp) =>{
	inp.addEventListener("focus", () => {
		inp.classList.add("active");
	});
	inp.addEventListener("blur", () => {
		if(inp.value != "") return;
		inp.classList.remove("active");
	});
});

if ( window.history.replaceState ) {
	window.history.replaceState( null, null, window.location.href );
}
