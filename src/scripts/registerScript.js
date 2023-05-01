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

$(document).ready(() => {
	$('.signupForm').on('submit', () => {

		// prevents default behaviour
		// Prevents event propagation
		return false;
	});
});
$('.signupForm').keypress((e) => {

	// Enter key corresponds to number 13
	if (e.which === 13) {
		$('.signupForm').submit();
		console.log('form submitted');
	}
})

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
