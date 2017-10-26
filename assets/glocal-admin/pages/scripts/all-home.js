var home_url = document.getElementsByTagName('base')[0].getAttribute('href');
toastr.options = {
    "closeButton": true,
    "debug": false,
    "positionClass": "toast-top-right",
    "onclick": null,
    "showDuration": "1000",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};
jQuery(document).ready(function($) {
    var table = $('#sample_1');

    var oTable = table.dataTable({
        // Internationalisation. For more info refer to http://datatables.net/manual/i18n
        "language": {
            "aria": {
                "sortAscending": ": activate to sort column ascending",
                "sortDescending": ": activate to sort column descending"
            },
            "emptyTable": "No data available in table",
            "info": "Showing _START_ to _END_ of _TOTAL_ entries",
            "infoEmpty": "No entries found",
            "infoFiltered": "(filtered1 from _MAX_ total entries)",
            "lengthMenu": "_MENU_ entries",
            "search": "Search:",
            "zeroRecords": "No matching records found"
        },

        // setup buttons extentension: http://datatables.net/extensions/buttons/
        buttons: [
            { extend: 'print', className: 'btn dark btn-outline' },
            { extend: 'pdf', className: 'btn green btn-outline' },
            { extend: 'csv', className: 'btn purple btn-outline ' }
        ],

        // setup responsive extension: http://datatables.net/extensions/responsive/
        responsive: {
            details: {
               
            }
        },

        "order": [
            [0, 'asc']
        ],
        
        "lengthMenu": [
            [5, 10, 15, 20, -1],
            [5, 10, 15, 20, "All"] // change per page values here
        ],
        // set the initial value
        "pageLength": 5,

        "dom": "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable
    });

    table.on('click', '.delete_room', function (e) {
        e.preventDefault();
        var _this = $(this), nRow = _this.parents('tr')[0], _room = _this.attr('data-id');
        $.post(
            home_url+'/glocal-admin/update_room_data', 
            {
                id: _room, 
                field: 'delete_room', 
                accessToken: $("#accessToken").val()}, 
            function(data) {
                data = JSON.parse(data);
                add_alert(data.type, data.msg, data.title);
                if (data.type == 'success') {
                    oTable.fnDeleteRow(nRow);
                }
            }
        );
    });

    table.on( 'draw', function () {
        initEditable();
    } );

    function initEditable(){
        $('.text-editable').editable();
        $('.select-editable').editable({
            source: [
                {value: 1, text: "HOUSE"},     
                {value: 2, text: "APARTMENT"},     
                {value: 3, text: "VILLA"},     
                {value: 4, text: "HOTEL"},     
                {value: 5, text: "STUDIO"}  
            ]
        });
        
        $('.text-editable, .select-editable').on('save', function(e, params) {
            // alert('Saved value: ' + params.newValue);
            var _data = $(this).data();
            $.post(home_url+'/glocal-admin/update_room_data', 
                {
                    id: _data.id,
                    field: _data.field,
                    value: params.newValue,
                    accessToken: $('input#accessToken').val()
                }, function(res) {
                    try {
                        res = JSON.parse(res);
                        toastr[res.type](res.msg, res.title);
                    } catch(e) {
                        // statements
                        console.log(e);
                    }
                }
            );
        });
    }

    initEditable();

    function add_alert(type, message, title){
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "1000",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        toastr[type](message, title);
    }
});