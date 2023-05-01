$(document).ready(function(){
	$('.approvestudentbtn').on('click', function(){
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

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}