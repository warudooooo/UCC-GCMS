$(document).ready(function(){
	$('.subeditbtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#qID').val(data[1]);
                $('#qYear').val(data[2]);
                $('#qSubject').val(data[3]);
                $('#qQuestion').val(data[4]);
                $('#qOptionOne').val(data[5]);
                $('#qOptionTwo').val(data[6]);
                $('#qOptionThree').val(data[7]);
                $('#qOptionFour').val(data[8]);
                $('#qAnswer').val(data[9]);
	});
});

$(document).ready(function(){
	$('.questiondeletebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#qsNum').val(data[0]);
                $('#qsID').val(data[1]);
                $('#qsYear').val(data[2]);
                $('#qsSubject').val(data[3]);
	});
});

$(document).ready(function(){
	$('.recordsdeletebtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#admID').val(data[1]);
                $('#qYear').val(data[2]);
                $('#admFile').val(data[3]);
	});
});

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}