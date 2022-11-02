$(document).ready(function(){
	$('.seemorebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#appointmentDetails').val(data[12]);
	});
});

$(document).ready(function(){
	$('.approvebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#appointmentID').val(data[1]);
                $('#studentName').val(data[2]);
                $('#studentNumber').val(data[3]);
                $('#studentCourse').val(data[4]);
                $('#studentEmail').val(data[5]);
                $('#appointmentReason').val(data[6]);
                $('#appointmentType').val(data[7]);
                $('#Details').val(data[12]);
	});
});

$(document).ready(function(){
	$('.markasdonebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#appointmentID').val(data[1]);
                $('#studentName').val(data[2]);
                $('#studentNumber').val(data[3]);
                $('#studentCourse').val(data[4]);
                $('#studentEmail').val(data[5]);
                $('#appointmentReason').val(data[6]);
                $('#appointmentType').val(data[7]);
                $('#Details').val(data[12]);
	});
});