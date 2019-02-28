<div class="col-xs-12">
    <div class="width=auto">
        <h1 class="header smaller lighter blue">
            <center><b>GROCERIES MENU LIST</b></center>
        </h1>
        @if(\Session::has('success'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{\Session::get('success')}}
        </div>
        @endif
        <div class="clearfix">
            <div class="pull-right tableTools-container">
                <a href='groceries_menu/create' class="btn btn-success no-radius" title="Add New" data-placement="bottom">
                    <i class="ace-icon fa fa-plus"></i>
                </a>
            </div>
        </div>
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="center">Product Code</th>
                        <th class="center">Product Name</th>
                        <th class="center">Price</th>
                        <th class="center">Description</th>
                        <th class="hidden-480"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td class="center">{{$item->kode_menu}}</td>
                        <td class="center">{{$item->nama_menu}}</td>
                        <td class="center">{{number_format($item->price)}}</td>
                        <td class="center">{{$item->description}}</td>
                        <td class="center">
                            <div class="hidden-sm hidden-xs action-buttons">
                                <a class="green" title="VIEW" data-placement="bottom" href='/groceries_menu/{{$item->id_menu}}'>
                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                </a>
                                &nbsp;
                                <a class="green" title="EDIT" data-placement="bottom" href='/groceries_menu/{{$item->id_menu}}/edit'>
                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                </a>
                                &nbsp;
                                <a class="red" title="DELETE" data-placement="bottom" href='/groceries_menu/{{$item->id_menu}}/delete'>
                                    <i class="ace-icon fa fa-trash bigger-130"></i>
                                </a>
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
    jQuery(function ($) {
        var myTable =
            $('#dynamic-table')
            .DataTable({
                bAutoWidth: false,
                "aoColumns": [{
                        "bSortable": true
                    },
                    null, null, null,
                    {
                        "bSortable": false
                    }
                ],
                "aaSorting": [],
                "sScrollX": "100%",
                "sScrollXInner": "120%",
                "bScrollCollapse": true,
                select: {
                    style: 'multi'
                }
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

</script>

<script>
    function rupiah($angka) {

        $hasil_harga = "Rp ".number_format($item - > harga, 2, ',', '.');
        return $hasil_rupiah;
    }

</script>
