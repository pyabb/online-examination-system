$(function(e) {
    "use strict";

    //______Basic Data Table
    $('#responsive-datatable').DataTable({
        language: {
            searchPlaceholder: 'Search...',
            scrollX: "100%",
            sSearch: '',
        }
    });

    //______Select2
    $('.select2').select2({
        minimumResultsForSearch: Infinity
    });
});
