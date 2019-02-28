<div class="col-xs-12">
    <div class="width=auto">
        <h1 class="header smaller lighter blue">
            <center><b>PAYMENT OWNER LIST</b></center>
        </h1>
        @if(\Session::has('success'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{\Session::get('success')}}
        </div>
        @endif
        <div class="clearfix">
            <div>
                <a href='#' onclick="receiptSelected()">
                    <button id="print_button" type="button" class="btn btn-success">Print Selected Bill</button>
                </a>
                <div class="pull-right tableTools-container">
                <a href='#' onclick="SelectAll()" class="btn btn-success no-radius" title="Select All" data-placement="bottom">
                        <span>Select All</span>
                    </a>
                    <a href='#' onclick="deSelectAll()" class="btn btn-success no-radius" title="Deselect All" data-placement="bottom">
                        <span>Deselect All</span>
                    </a>
                </div>
            </div>
        </div>
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="center">ID Payment</th>
                        <th class="center">Payment No.</th>
                        <th class="center">Billing No.</th>
                        <th class="center">Unit No.</th>
                        <th class="center">Amount of Bill</th>
                        <th class="center">Payment Date</th>
                        <th class="center">Paid</th>
                        <th class="hidden-480"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td class="center">{{$item->id_payment_owner}}</td>
                        <td class="center">{{$item->kode_payment}}</td>
                        <td class="center">{{$item->kode_billing}}</td>
                        <td class="center">{{$item->kode_tower}}{{$item->no_floor}}{{$item->no_unit_apart}}</td>
                        <td class="center">{{number_format($item->total_tagihan_all)}}</td>
                        <td class="center">{{$item->periode_bayar}}</td>
                        <td class="center">{{number_format($item->jml_bayar)}}</td>
                        <td class="center">
                            <div class="hidden-sm hidden-xs action-buttons">
                                <a href='/receipt/{{$item->id_payment_owner}}' title="CREATE RECEIPT" data-placement="bottom">
                                    <i class="ace-icon fa fa-print bigger-130"></i>
                                </a>
                                &nbsp;
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-----------------------------------------script ------------------------------------>
<script type="text/javascript">
    var myTable;
    jQuery(function ($) {
        myTable =
            $('#dynamic-table')
            .DataTable({
                bAutoWidth: false,
                "aoColumns": [{
                        "bSortable": true,
                        "visible": false
                    },
                    null, null, null, null, null, null,
                    {
                        "bSortable": false
                    }
                ],
                "aaSorting": [],
                select: true,
            });
        $.fn.dataTable.Buttons.defaults.dom.container.className =
            'dt-buttons btn-overlap btn-group btn-overlap';

        new $.fn.dataTable.Buttons(myTable, {
            buttons: [{
                    // "extend": "colvis",
                    // "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                    // "className": "btn btn-white btn-primary btn-bold",
                    // columns: ':not():not(:last)'
                },
                {
                    // "extend": "print",
                    // "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                    // "className": "btn btn-white btn-primary btn-bold",
                    // autoPrint: false
                }
            ]
        });
        myTable.buttons().container().appendTo($('.tableTools-container'));
        //style the message box
        var defaultCopyAction = myTable.button(1).action();
        myTable.button(1).action(function (e, dt, button, config) {
            defaultCopyAction(e, dt, button, config);
            $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
        });
        var defaultColvisAction = myTable.button(0).action();
        myTable.button(0).action(function (e, dt, button, config) {
            defaultColvisAction(e, dt, button, config);
            if ($('.dt-button-collection > .dropdown-menu').length == 0) {
                $('.dt-button-collection')
                    .wrapInner(
                        '<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />'
                    )
                    .find('a').attr('href', '#').wrap("<li />")
            }
            $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
        });
        setTimeout(function () {
            $($('.tableTools-container')).find('a.dt-button').each(function () {
                var div = $(this).find(' > div').first();
                if (div.length == 1) div.tooltip({
                    container: 'body',
                    title: div.parent().text()
                });
                else $(this).tooltip({
                    container: 'body',
                    title: $(this).text()
                });
            });
        }, 500);
    });

    function receiptSelected() {
        data = myTable.rows({
            selected: true
        }).data();
        let temp = [];
        $.each(data, function (a, b) {
            temp.push(b[0]);
        })
        let res = temp.join(",");
        window.location = "multi_receipt/" + res;
    }

    function SelectAll(){
        myTable.rows().select();
    }

    function deSelectAll(){
        myTable.rows().deselect();
    }
</script>
