var originalHTML = document.documentElement.outerHTML; // store original HTML

document.addEventListener('DOMSubtreeModified', function() {
  if (document.documentElement.outerHTML !== originalHTML) { // check if HTML was modified
    alert('Wag ka na mag luto please.'); // display error message
    location.reload(); // reload the page
  }
});

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
	$('.restorebtn').on('click', function(){
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
	$('.appointmentdeletebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#aID').val(data[1]);
                $('#studentName').val(data[3]);
                $('#studentNumber').val(data[4]);
                $('#studentCourse').val(data[5]);
	});
});

// =============================================================================================================== sched

$(document).ready(function(){
	$('.srestorebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var datas = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(datas);
                $('#sappID').val(datas[1]);
                $('#sappsName').val(datas[3]);
                $('#sappsNumber').val(datas[4]);
                $('#sappsCourse').val(datas[5]);
                $('#sappsEmail').val(datas[6]);
                $('#sappReason').val(datas[7]);
                $('#sappType').val(datas[2]);
                $('#sappDate').val(datas[8]);
                $('#sappDetails').val(datas[12]);
	});
});

$(document).ready(function(){
	$('.sappointmentdeletebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#saID').val(data[1]);
                $('#sName').val(data[3]);
                $('#sNumber').val(data[4]);
                $('#sCourse').val(data[5]);
	});
});

// Counseling
// =============================================================================================================== pending couns
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
                $('#csDetails').val(data[10]);
	});
});

$(document).ready(function(){
	$('.crestorebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var datas = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(datas);
                $('#cNum').val(datas[0]);
                $('#cID').val(datas[1]);
                $('#csName').val(datas[3]);
                $('#csNumber').val(datas[4]);
                $('#csCourse').val(datas[5]);
                $('#csEmail').val(datas[6]);
                $('#cType').val(datas[2]);
                $('#cDate').val(datas[7]);
                $('#cDetails').val(datas[11]);
	});
});

$(document).ready(function(){
	$('.counselingdeletebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#cdNum').val(data[0]);
                $('#cdID').val(data[1]);
                $('#cdsName').val(data[3]);
                $('#cdsNumber').val(data[4]);
                $('#cdsCourse').val(data[5]);
	});
});

// =============================================================================================================== sched
$(document).ready(function(){
	$('.scseemorebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#csDetails').val(data[12]);
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
    altFormat: "F j, Y (h:i K)",
    minTime: "08:00",
    maxTime: "17:00",
    minuteIncrement: "30",
});

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}