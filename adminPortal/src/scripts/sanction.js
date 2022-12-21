$(document).ready(function(){
	$('.seemorebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#sName').val(data[1]);
                $('#sNumber').val(data[2]);
                $('#sCourse').val(data[3]);
                $('#sCase').val(data[4]);
                $('#sType').val(data[6]);
                $('#sMessage').val(data[7]);
	});
});

$(document).ready(function(){
	$('.seemorebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#ssName').val(data[1]);
                $('#ssNumber').val(data[2]);
                $('#ssCourse').val(data[3]);
                $('#ssCase').val(data[4]);
                $('#ssType').val(data[6]);
                $('#ssMessage').val(data[7]);
                $('#ssID').val(data[10]);
	});
});

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
