<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Marketing List</h3>
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
                    <h2>
                        <a href='marketing/create'>
                            <button id="add_button" type="button" class="btn btn-primary">Add
                                Marketing</button></a>
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
                                <th>Marketing Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item->nama_marketing}}</td>
                                <td width='20%'>
                                    <a href='/marketing/{{$item->id_marketing}}/edit'>
                                        <button type='button' class='btn btn-primary btn-xs'>Edit</button>
                                    </a>
                                    <a href='/marketing/{{$item->id_marketing}}/delete'>
                                        <button type='button' class='btn btn-warning btn-xs'>Delete</button>
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
