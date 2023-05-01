var originalHTML = document.documentElement.outerHTML; // store original HTML

document.addEventListener('DOMSubtreeModified', function() {
  if (document.documentElement.outerHTML !== originalHTML) { // check if HTML was modified
    alert('Wag ka na mag luto please.'); // display error message
    location.reload(); // reload the page
  }
});


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
	$('.signinForm').on('submit', () => {

		// prevents default behaviour
		// Prevents event propagation
		return false;
	});
});
$('.signinForm').keypress((e) => {

	// Enter key corresponds to number 13
	if (e.which === 13) {
		$('.signinForm').submit();
		console.log('form submitted');
	}
})

$(document).ready(function (){
	$("#btnSignin").on('click', function(){
		var sNumber = $("#sNumber").val();
		var sPassword = $("#sPassword").val();

			$.ajax({
				url: "index.php",
				method: "POST",
				data: {
					submit: 1,
					sNumberPHP: sNumber,
					sPasswordPHP: sPassword
				},
				success: function(response){
					$("#result").show();
					$("#result").html(response);

					if(response.indexOf('Student login successful, you will be redirected in the dashboard page.') >= 0)
					window.location = 'studentPortal/index.php';
					else if(response.indexOf('Admin login successful, you will be redirected in the dashboard page.') >= 0)
					window.location = 'adminPortal/index.php';
				},
				dataType: 'text'
			});
	});
});

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
