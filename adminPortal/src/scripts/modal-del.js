// =============================================================================================================== app

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

                $('#csDetails').val(data[11]);
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
	$('.csrestorebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var datas = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(datas);
                $('#scsNum').val(datas[0]);
                $('#scsID').val(datas[1]);
                $('#scsName').val(datas[3]);
                $('#scsNumber').val(datas[4]);
                $('#scsCourse').val(datas[5]);
                $('#scsEmail').val(datas[6]);
                $('#scsType').val(datas[2]);
                $('#scsSchedule').val(datas[7]);
                $('#scsDateapproved').val(datas[8]);
                $('#scsDetails').val(datas[12]);
	});
});

$(document).ready(function(){
	$('.scounselingdeletebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#scNum').val(data[0]);
                $('#scID').val(data[1]);
                $('#scName').val(data[3]);
                $('#scNumber').val(data[4]);
                $('#scCourse').val(data[5]);
	});
});