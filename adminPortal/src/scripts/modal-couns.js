$(document).ready(function(){
	$('.cseemorebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

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
                $('#counselingID').val(data[11]);
                $('#studentName').val(data[2]);
                $('#studentNumber').val(data[3]);
                $('#studentCourse').val(data[4]);
                $('#studentEmail').val(data[5]);
                $('#counselingType').val(data[1]);
                $('#Details').val(data[10]);
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

                $('#appointmentDetails').val(data[11]);
	});
});

$(document).ready(function(){
	$('.scmarkasdonebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#scID').val(data[11]);
                $('#studentName').val(data[1]);
                $('#studentNumber').val(data[2]);
                $('#studentCourse').val(data[3]);
                $('#studentEmail').val(data[4]);
                $('#scType').val(data[5]);
                $('#Details').val(data[11]);
	});
});

$(document).ready(function(){
	$('.scdeletebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#scdID').val(data[12]);
                $('#scdName').val(data[1]);
                $('#scdNumber').val(data[2]);
                $('#scdCourse').val(data[3]);
                $('#scdEmail').val(data[4]);
                $('#scdSchedule').val(data[6]);
                $('#scdDateapproved').val(data[7]);
                $('#scdType').val(data[5]);
                $('#scdDetails').val(data[11]);

	});
});

flatpickr("input[type=datetime-local]", {
    disableMobile: "true",
    minDate: "today",
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    altInput: true,
    altFormat: "F j, Y (h:i K)",
    minTime: "08:00",
    maxTime: "17:00",
    minuteIncrement: "10",
});

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}