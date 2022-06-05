$(function () {
    $("#mytable").DataTable({
        dom: 'Bfltip',
        buttons: [
            'copy', 'excel', 'pdf', 'print'
        ]
    });
    $("#mytable").editableTableWidget();
});