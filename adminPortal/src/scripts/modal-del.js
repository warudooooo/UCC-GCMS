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
	$('.appointmentdeletebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#aID').val(data[1]);
                $('#studentName').val(data[2]);
                $('#studentNumber').val(data[3]);
                $('#studentCourse').val(data[4]);
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
                $('#sappsName').val(datas[2]);
                $('#sappsNumber').val(datas[3]);
                $('#sappsCourse').val(datas[4]);
                $('#sappsEmail').val(datas[5]);
                $('#sappReason').val(datas[6]);
                $('#sappType').val(datas[7]);
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
                $('#sName').val(data[2]);
                $('#sNumber').val(data[3]);
                $('#sCourse').val(data[4]);
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
                $('#csName').val(datas[2]);
                $('#csNumber').val(datas[3]);
                $('#csCourse').val(datas[4]);
                $('#csEmail').val(datas[5]);
                $('#cType').val(datas[6]);
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
                $('#cdsName').val(data[2]);
                $('#cdsNumber').val(data[3]);
                $('#cdsCourse').val(data[4]);
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
                $('#scsName').val(datas[2]);
                $('#scsNumber').val(datas[3]);
                $('#scsCourse').val(datas[4]);
                $('#scsEmail').val(datas[5]);
                $('#scsType').val(datas[6]);
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
                $('#scName').val(data[2]);
                $('#scNumber').val(data[3]);
                $('#scCourse').val(data[4]);
	});
});