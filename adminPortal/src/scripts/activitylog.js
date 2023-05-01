var originalHTML = document.documentElement.outerHTML; // store original HTML

document.addEventListener('DOMSubtreeModified', function() {
  if (document.documentElement.outerHTML !== originalHTML) { // check if HTML was modified
    alert('Wag ka na mag luto please.'); // display error message
    location.reload(); // reload the page
  }
});


$(document).ready(function() {
    $('.btnact').on('click', function() {
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();
        console.log(data);

        $('#activityID').val(data[1]);
        $('#activityDate').val(data[2]);
        $('#pIC').val(data[3]);
        $('#file').val(data[4]);
        
        
        var activityDetailsBefore = data[5].trim();
        if (activityDetailsBefore === '') {
            console.log('The activityDetailsBefore field is empty!');
            $('#activityDetailsBefore').hide();
            $('h5.detailsbefore').hide();
            $('h4.databefore').hide();
            $('hr.before').hide();
        } else {
            $('#activityDetailsBefore').val(activityDetailsBefore).show();
            $('h5.detailsbefore').show();
            $('h4.databefore').show();
            $('hr.before').show();
        }    

        var activityDetailsAfter = data[6].trim();
        if (activityDetailsAfter === '') {
            console.log('The activityDetailsAfter field is empty!');
            $('#activityDetailsAfter').hide();
            $('h5.details').hide();
            $('h4.afterchanges').hide();
        } else {
            $('#activityDetailsAfter').val(activityDetailsAfter).show();
            $('h5.details').show();
            $('h4.afterchanges').show();
        }

        var activityDetails = data[8].trim();
        if (activityDetails === '') {
            console.log('The activityDetails field is empty!');
            $('#activityDetails').hide();
            $('h5.activity').hide();
        } else {
            $('#activityDetails').val(activityDetails).show();
            $('h5.activity').show();
        }

        var activityReason = data[7].trim();
        if (activityReason === '') {
            console.log('The activityReason field is empty!');
            $('#activityReason').hide();
            $('h5.reason').hide();
        } else {
            $('#activityReason').val(activityReason).show();
            $('h5.reason').show();
        }

        var button = data[4].trim();
        if (button === '') {
            console.log('The file field is empty!');
            $('#file').hide();
            $('button.download').hide()
        } else {
            $('button.download').show();
        }
    });
});
