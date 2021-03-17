$(function () {
    $('.js-basic-example').DataTable();

    //Exportable table
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });

    //Plain table
    var dt=$('.js-plaintable').DataTable({

        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "bPaginate": false,//hide Pagination bar

        "bFilter": false, //hide Search bar
        "bInfo": false, // hide showing entries

    });
    //Plain table
    var dt=$('.js-full-datatable').DataTable({

        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "bPaginate": true,//hide Pagination bar

        "bFilter": true, //hide Search bar
        "bInfo": true, // hide showing entries

    });
});
