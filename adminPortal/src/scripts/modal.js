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
                $('#studentName').val(data[3]);
                $('#studentNumber').val(data[4]);
                $('#studentCourse').val(data[5]);
                $('#studentEmail').val(data[6]);
                $('#appointmentReason').val(data[7]);
                $('#appointmentType').val(data[2]);
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
                $('#studentName').val(data[3]);
                $('#studentNumber').val(data[4]);
                $('#studentCourse').val(data[5]);
                $('#studentEmail').val(data[6]);
                $('#appointmentReason').val(data[7]);
                $('#appointmentType').val(data[2]);
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
	$('.markasactivebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#actID').val(data[0]);
                $('#actName').val(data[1]);
                $('#actNumber').val(data[2]);
                $('#actCourse').val(data[4]);
                $('#actEmail').val(data[3]);
                $('#actPassword').val(data[5]);
                $('#actvkey').val(data[6]);
                $('#actVerified').val(data[7]);
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
                $('#studentEmail').val(data[3]);
                $('#studentPassword').val(data[5]);
                $('#vkey').val(data[6]);
                $('#sVerified').val(data[7]);
	});
});

$(document).ready(function(){
	$('.studentdeletepermanentbtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#delID').val(data[0]);
                $('#delName').val(data[1]);
                $('#delNumber').val(data[2]);
                $('#delEmail').val(data[3]);
                $('#delCourse').val(data[4]);
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
                $('#appsName').val(datas[3]);
                $('#appsNumber').val(datas[4]);
                $('#appsCourse').val(datas[5]);
                $('#appsEmail').val(datas[6]);
                $('#appReason').val(datas[7]);
                $('#appType').val(datas[2]);
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
                $('#appsName').val(datas[3]);
                $('#appsNumber').val(datas[4]);
                $('#appsCourse').val(datas[5]);
                $('#appsEmail').val(datas[6]);
                $('#appReason').val(datas[7]);
                $('#appType').val(datas[2]);
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
                $('#stEmail').val(data[4]);
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
