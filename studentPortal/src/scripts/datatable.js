$(document).ready(function() {
    $('#dataTable').DataTable({
        info: false,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search",
        }
    });
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

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}