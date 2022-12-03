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

    $('#exam-responsive-datatable').DataTable({
        language: {
            searchPlaceholder: 'Search...',
            scrollX: "100%",
            sSearch: '',
        },
        order: [[0, 'desc']],
        columnDefs: [
            {
                targets: [5],
                orderable: false,
            },
        ],
    });

    //______Select2
    $('.select2').select2({
        minimumResultsForSearch: Infinity
    });
});
