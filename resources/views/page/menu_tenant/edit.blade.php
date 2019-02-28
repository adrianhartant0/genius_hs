<div class="page-header">
    <h1 class="orange">
        <i class="ace-icon fa fa-angle-double-right"></i>
        EDIT TENANT MENU
        <i class="ace-icon fa fa-angle-double-left"></i>
        <a href='/menu_tenant' class="btn  btn-yellow btn-sm pull-right type=" submit">
            <i class="ace-icon fa fa-times"></i>
            CLOSE
        </a>
    </h1>
</div><!-- /.page-header -->

<div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <form class="form-horizontal" role="form" id="form_add" method="post" action="{{url('/menu_tenant/'. $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <input type="hidden" name="status" id="status" value="1" />
        <input type="hidden" name="status_available" id="status_available" value="1" />

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Tenant Name </label>

            <div class="col-sm-9">
                <select class="chosen-select form-control" name="id_unit_tenant" id="form-field-select-3" value='{{$data->nama_unit_tenant}}'>
                    <option value=""> </option>
                    @foreach ($data_master_tenant as $item2)
                    @php
                    $selected = ($item2->id_unit_tenant==$data->id_unit_tenant)?'selected':'';
                    @endphp
                    <option value="{{$item2->id_unit_tenant}}" {{ $selected }}>{{$item2->nama_unit_tenant}}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Menu Category </label>

            <div class="col-sm-9">
                <select class="chosen-select form-control" name="id_menu_category" id="form-field-select-3" value='{{$data->nama_menu_category}}'>
                    <option value=""> </option>
                    @foreach ($data_master_category as $item2)
                    @php
                    $selected = ($item2->id_menu_category==$data->id_menu_category)?'selected':'';
                    @endphp
                    <option value="{{$item2->id_menu_category}}" {{ $selected }}>{{$item2->nama_menu_category}}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Product Code </label>

            <div class="col-sm-9">
                <input type="text" id="kode_menu" name="kode_menu" class="col-xs-10 col-sm-5"
                    value='{{$data->kode_menu}}'>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Product Name </label>

            <div class="col-sm-9">
                <input type="text" id="nama_menu" name="nama_menu" class="col-xs-10 col-sm-5"
                    value='{{$data->nama_menu}}'>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Price </label>

            <div class="col-sm-9">
                <input type="text" id="price" name="price" class="col-xs-10 col-sm-5" value='{{$data->price}}'>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Description </label>

            <div class="col-sm-9">
                <input type="text" id="description" name="description" class="col-xs-10 col-sm-12" value='{{$data->description}}'>
            </div>
        </div>

        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <a href='/menu_tenant' class="btn btn-primary type=" submit">
                    <i class="ace-icon fa fa-times"></i>
                    Cancel
                </a>
                &nbsp; &nbsp; &nbsp;
                <button class="btn btn-warning type=" submit" name="add" id="add">
                    <i class="ace-icon fa fa-check bigger-110"></i>
                    Update
                </button>
            </div>
        </div>
    </form>
</div>
