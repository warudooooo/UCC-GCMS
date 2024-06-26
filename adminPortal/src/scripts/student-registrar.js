const optionMenu = document.querySelector(".select-menu"),
selectBtn = optionMenu.querySelector(".select-btn"),
options = optionMenu.querySelectorAll(".option"),
sBtn_text = optionMenu.querySelector(".sBtn-text"),
sBtn_text_clone = optionMenu.querySelector(".sBtn-text-clone");


selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));

options.forEach(option => {
option.addEventListener("click", () => {
    let selectedOption = option.querySelector(".option-text").innerText;
    sBtn_text.innerText = selectedOption;
    sBtn_text_clone.innerText = selectedOption;

    optionMenu.classList.remove("active");
})
})

$(document).ready(function(){
	$('.viewdetails').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#studentStatus').val(data[11]);
                $('#studentName').val(data[4]);
                $('#studentNumber').val(data[3]);
                $('#studentCourse').val(data[5]);
                $('#studentAddress').val(data[6]);
                $('#studentEmail').val(data[7]);
                $('#studentPhone').val(data[8]);
	});
});

$(document).ready(function(){
	$('.editstudent').on('click', function(){
		$tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#studentID').val(data[1]);
                $('#studentName1').val(data[4]);
                $('#studentNumber1').val(data[3]);
                $('#studentCourse1').val(data[5]);
                $('#studentAddress1').val(data[6]);
                $('#studentEmail1').val(data[7]);
                $('#studentPhone1').val(data[8]);
                //before
                $('#studentStatus2').val(data[11]);
                $('#studentName2').val(data[4]);
                $('#studentNumber2').val(data[3]);
                $('#studentCourse2').val(data[5]);
                $('#studentAddress2').val(data[6]);
                $('#studentEmail2').val(data[7]);
                $('#studentPhone2').val(data[8]);

	});
});

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}