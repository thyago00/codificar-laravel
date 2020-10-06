$(document).ready(function(){
    $('#tabelaOrcamentos').DataTable({ 
    "columnDefs": [
        { "orderable": false, "targets":  6},
        { "searchable": false, "targets": 6 }
    ],
    "order": [[ 2, "desc" ]],
    responsive: true,
    "language": {"url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json"},
    
    });    
});
