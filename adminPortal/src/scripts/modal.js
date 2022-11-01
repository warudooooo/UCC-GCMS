$(document).ready(function(){
	$('.seemorebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#appointmentDetails').val(data[11]);
	});
});

$(document).ready(function(){
	$('.approvebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#studentName').val(data[1]);
                $('#studentNumber').val(data[2]);
                $('#studentCourse').val(data[3]);
                $('#studentEmail').val(data[4]);
                $('#appointmentReason').val(data[5]);
                $('#appointmentType').val(data[6]);
	});
});