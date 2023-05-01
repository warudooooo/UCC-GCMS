// $(document).ready(function(){
// 	$('.seemorebtn').on('click', function(){
// 		$tr = $(this).closest('tr');

//                 var data = $tr.children("td").map(function () {
//                     return $(this).text();
//                 }).get();

//                 console.log(data);

//                 $('#sName').val(data[1]);
//                 $('#sNumber').val(data[2]);
//                 $('#sCourse').val(data[3]);
//                 $('#sCase').val(data[4]);
//                 $('#sType').val(data[6]);
//                 $('#sMessage').val(data[7]);
// 	});
// });

$(document).ready(function(){
	$('.seemorebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#ssName').val(data[3]);
                $('#ssNumber').val(data[4]);
                $('#ssCourse').val(data[5]);
                $('#ssCase').val(data[6]);
                $('#ssType').val(data[7]);
                $('#ssMessage').val(data[8]);
                $('#ssID').val(data[11]);
                $('#ssDegree').val(data[12]);
                $('#ssDate').val(data[9]);

                var markasdone = data[13].trim();
                if (markasdone === 'Pending') {
                    console.log('Pending');
                    $('button.markasdone').show();
                } else if (markasdone === 'Completed') {
                    console.log('Completed');
                    $('button.markasdone').hide();
                }
	});
});

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
