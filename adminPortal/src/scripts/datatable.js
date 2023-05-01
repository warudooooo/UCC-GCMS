var originalHTML = document.documentElement.outerHTML; // store original HTML

document.addEventListener('DOMSubtreeModified', function() {
  if (document.documentElement.outerHTML !== originalHTML) { // check if HTML was modified
    alert('Wag ka na mag luto please.'); // display error message
    location.reload(); // reload the page
  }
});


$(document).ready(function() {
    $('#dataTable2').DataTable({
        info: false,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search",
        }
    });
});
$(document).ready(function() {
    $('#dataTable3').DataTable({
        info: false,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search",
        }
    });
});

$(document).ready(function() {
    $('#dataTable4').DataTable({
        info: false,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search",
        }
    });
});

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}