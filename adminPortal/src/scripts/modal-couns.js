var originalHTML = document.documentElement.outerHTML; // store original HTML

document.addEventListener('DOMSubtreeModified', function() {
  if (document.documentElement.outerHTML !== originalHTML) { // check if HTML was modified
    alert('Wag ka na mag luto please.'); // display error message
    location.reload(); // reload the page
  }
});

$(document).ready(function(){
	$('.cseemorebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#studName').val(data[2]);
                $('#counselType').val(data[1]);
                $('#counselSched').val(data[6]);
                $('#counselingDetails').val(data[10]);
	});
});

$(document).ready(function(){
	$('.capprovebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#counselingType').val(data[1]);
                $('#studentName').val(data[2]);
                $('#studentNumber').val(data[3]);
                $('#studentCourse').val(data[4]);
                $('#studentEmail').val(data[5]);
                $('#requestedSched').val(data[6]);
                $('#Details').val(data[10]);
                 $('#counselingID').val(data[11]);
	});
});

$(document).ready(function(){
	$('.cdeletebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var datas = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(datas);
                $('#counsID').val(datas[11]);
                $('#counsName').val(datas[2]);
                $('#counsNumber').val(datas[3]);
                $('#counsCourse').val(datas[4]);
                $('#counsEmail').val(datas[5]);
                $('#counsDate').val(datas[6]);
                $('#counsType').val(datas[1]);
                $('#counsDetails').val(datas[10]);
	});
});

// ===================================================================================== //

$(document).ready(function(){
	$('.scseemorebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#studsName').val(data[2]);
                $('#counselsType').val(data[1]);
                $('#counselsSched').val(data[6]);
                $('#appointmentDetails').val(data[10]);
	});
});

$(document).ready(function(){
	$('.scCompletedBtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#scID').val(data[11]);
                $('#studentName').val(data[2]);
                $('#studentNumber').val(data[3]);
                $('#studentCourse').val(data[4]);
                $('#studentEmail').val(data[5]);
                $('#scScheds').val(data[6]);
                $('#scType').val(data[1]);
                $('#Details').val(data[11]);
	});
});

$(document).ready(function(){
	$('.reSchedule').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#scdID').val(data[11]);
                $('#scdName').val(data[2]);
                $('#scdNumber').val(data[3]);
                $('#scdCourse').val(data[4]);
                $('#scdEmail').val(data[5]);
                $('#scdSchedule').val(data[6]);
                $('#scdDateapproved').val(data[7]);
                $('#scdType').val(data[1]);
                $('#scdDetails').val(data[11]);

	});
});

flatpickr("input[type=datetime-local]", {
    disableMobile: "true",
    minDate: "today",
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    altInput: true,
    altFormat: "F j, Y h:i K (l)",
    minTime: "08:00",
    maxTime: "17:00",
    minuteIncrement: "30",
});


if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}