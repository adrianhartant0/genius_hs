<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Tenant Menu List</h3>
        </div>
    </div>
    <div class="clearfix"></div>

    @if(\Session::has('success'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{\Session::get('success')}}
    </div>
    @endif

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Menu Category</th>
                                <th>Tenant Name</th>
                                <th>Product Code</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item->nama_menu_category}}</td>
                                <td>{{$item->nama_unit_tenant}}</td>
                                <td>{{$item->kode_menu_unit_tenant}}</td>
                                <td>{{$item->nama_menu_unit_tenant}}</td>
                                <td>{{number_format($item->harga)}}</td>
                                <td width='20%'>
                                    <a href='/menu_tenant/{{$item->id_menu_unit_tenant}}'>
                                        <button type='button' class='btn btn-primary btn-xs'>View</button>
                                    </a>
                                    <a href='/order_menu_tenant/{{$item->id_menu_unit_tenant}}/create'>
                                        <button type='button' class='btn btn-primary btn-xs'>Order</button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function rupiah($angka){
    
    $hasil_harga = "Rp " . number_format($item->harga,2,',','.');
    return $hasil_rupiah; 
}
</script>
