<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Tenant List</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>
                        <button id="add_button" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add
                            Data</button>
                    </h2>
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
                                <th>Kode Tenant</th>
                                <th>Nama Tenant</th>
                                <th>Owner Name</th>
                                <th>Tower</th>
                                <th>Floor</th>
                                <th>Telephone Number</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item->kode_tenant}}</td>
                                <td>{{$item->nama_tenant}}</td>
                                <td>{{$item->nama_owner}}</td>
                                <td>{{$item->nama_tower}}</td>
                                <td>{{$item->no_lantai}}</td>
                                <td>{{$item->no_telp}}</td>
                                <td>{{$item->email}}</td>
                                <td width='20%'>
                                    <button type='button' class='btn btn-primary btn-xs' onclick='edit_data_adv({{$item->id_tenant}},this)'>Edit</button>
                                    <button type='button' class='btn btn-warning btn-xs' onclick='del_tenant({{$item->id_tenant}})'>Delete</button></td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('page.tenant.modal')
