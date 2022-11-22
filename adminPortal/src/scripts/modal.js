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

$(document).ready(function(){
	$('.deletebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#historyID').val(data[1]);
                $('#studentName').val(data[2]);
                $('#studentNumber').val(data[3]);
                $('#studentCourse').val(data[4]);
                $('#studentEmail').val(data[5]);
	});
});

$(document).ready(function(){
	$('.studentdeletebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#ID').val(data[0]);
                $('#studentName').val(data[1]);
                $('#studentNumber').val(data[2]);
                $('#studentCourse').val(data[4]);
	});
});

$(document).ready(function(){
	$('.studenteditbtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#sName').val(data[1]);
                $('#sNumber').val(data[2]);
                $('#sEmail').val(data[3]);
                $('#sCourse').val(data[4]);
                $('#sPassword').val(data[5]);
	});
});

$(document).ready(function(){
	$('.unvstudenteditbtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#unvsName').val(data[1]);
                $('#unvsNumber').val(data[2]);
                $('#unvsEmail').val(data[3]);
                $('#unvsCourse').val(data[4]);
                $('#unvsPassword').val(data[5]);
                $('#unvvkey').val(data[6]);
	});
});

$(document).ready(function(){
	$('.admstudenteditbtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#admsName').val(data[1]);
                $('#admsNumber').val(data[2]);
                $('#admsCourse').val(data[4]);
	});
});

$(document).ready(function(){
	$('.appointmentdeletebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var datas = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(datas);
                $('#appID').val(datas[1]);
                $('#appsName').val(datas[2]);
                $('#appsNumber').val(datas[3]);
                $('#appsCourse').val(datas[4]);
                $('#appsEmail').val(datas[5]);
                $('#appReason').val(datas[6]);
                $('#appType').val(datas[7]);
                $('#appDate').val(datas[8]);
                $('#appDetails').val(datas[12]);
	});
});

$(document).ready(function(){
	$('.scdeletebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var datas = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(datas);
                $('#appID').val(datas[1]);
                $('#appsName').val(datas[2]);
                $('#appsNumber').val(datas[3]);
                $('#appsCourse').val(datas[4]);
                $('#appsEmail').val(datas[5]);
                $('#appReason').val(datas[6]);
                $('#appType').val(datas[7]);
                $('#appDate').val(datas[8]);
                $('#appDetails').val(datas[12]);
	});
});

$(document).ready(function(){
	$('.actionbtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#sName').val(data[1]);
                $('#sNumber').val(data[2]);
                $('#sCourse').val(data[3]);
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
    minuteIncrement: "10"
});


if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
