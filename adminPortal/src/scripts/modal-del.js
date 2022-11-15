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