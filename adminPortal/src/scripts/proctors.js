var originalHTML = document.documentElement.outerHTML; // store original HTML

document.addEventListener('DOMSubtreeModified', function() {
  if (document.documentElement.outerHTML !== originalHTML) { // check if HTML was modified
    alert('Wag ka na mag luto please.'); // display error message
    location.reload(); // reload the page
  }
});


flatpickr("input[type=datetime-local]", {
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    minTime: "08:00",
    maxTime: "17:00",
    altInput: true,
    altFormat: "h:i K",
    minuteIncrement: "30"
});

flatpickr("input[type=date]", {
    disableMobile: "true",
    minDate: "today",
    enableTime: false,
    altInput: true,
    altFormat: "F j, Y",
    dateFormat: "Y-m-d"
});

$(document).ready(function(){
	$('.addschedbtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#pID').val(data[1]);
                $('#pName').val(data[2]);
	});
});

$(document).ready(function(){
	$('.editschedbtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#num').val(data[0]);
                $('#spID').val(data[1]);
	});
});
$(document).ready(function(){
	$('.deleteschedbtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#row').val(data[0]);
                $('#dpID').val(data[1]);
	});
});

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}