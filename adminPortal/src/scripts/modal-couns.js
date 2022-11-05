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

                $('#appointmentDetails').val(data[10]);
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
                $('#Details').val(data[10]);
	});
});

$(document).ready(function(){
	$('.scdeletebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#scdID').val(data[11]);
                $('#scdName').val(data[1]);
                $('#scdNumber').val(data[2]);
                $('#scdCourse').val(data[3]);
	});
});

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}