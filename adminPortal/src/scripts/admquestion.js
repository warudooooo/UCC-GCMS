var originalHTML = document.documentElement.outerHTML; // store original HTML

document.addEventListener('DOMSubtreeModified', function() {
  if (document.documentElement.outerHTML !== originalHTML) { // check if HTML was modified
    alert('Wag ka na mag luto please.'); // display error message
    location.reload(); // reload the page
  }
});


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

$(document).ready(function(){
	$('.proceditbtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#pID').val(data[1]);
                $('#pName').val(data[2]);
                $('#oldPname').val(data[2]);
	});
});

$(document).ready(function(){
	$('.recordeditbtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#adID').val(data[1]);
                $('#adYear').val(data[2]);
                $('#fileName').val(data[3]);
	});
});

$(document).ready(function(){
	$('.viewschedbtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#peditID').val(data[1]);
                $('#peditName').val(data[2]);
	});
});

$(document).ready(function(){
	$('.procdelbtn').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#pdelID').val(data[1]);
                $('#pdelName').val(data[2]);
	});
});

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}