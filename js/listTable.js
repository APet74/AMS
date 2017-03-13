function format(d){
        return '<div class="row">'+
        '<div class="col col-md-2"><b>Retired Status:</b> &nbsp;'+d.retiredStatus+'</div>'+
        
         '<div class="col col-md-2"><b>Warranty Experation:</b> &nbsp;'+d.warrantyExp+'</div>'+
         '<div class="col col-md-2"><b>Manufacturer:</b> &nbsp;'+d.manufacturer+'</div>'+
         '<div class="col col-md-1"><b>Price:</b> &nbsp;$'+d.price+'</div>'+
         '<div class="col col-md-2"><b>Serial Number:</b> &nbsp;'+d.serialNum+'</div>'+
         '<div class="col col-md-3"><b>Description:</b> &nbsp;'+d.description+'</div>'+
         '</div>'+
         '<div class="row">'+
         '<div class="col col-md-12"><input type="hidden" name="itemID" id="itemID" value="'+d.itemID+'"><button class="btn btn-info">Edit Asset</button></div>'+
         '</div>';
}
$().ready(function(){
    var table = $('#assetTable').DataTable({
        "ajax": "txt/ajaxList.txt",
        "columns":[
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "type"},
            { "data": "computerName"},
            { "data": "location"},
            { "data": "currentUser"},
            { "data": "createdBy"},
        ]
    });
    $('#assetTable tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );

        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );
});