<div class="page-header">
    <h1 class="grey">
        <i class="ace-icon fa fa-angle-double-right"></i>
        VIEW TENANT MENU
        <i class="ace-icon fa fa-angle-double-left"></i>
        <a href='/e_ac_menu' class="btn  btn-yellow btn-sm pull-right type=" submit">
            <i class="ace-icon fa fa-times"></i>
            CLOSE
        </a>
    </h1>
</div><!-- /.page-header -->

<div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <form class="form-horizontal" role="form" id="form_add" method="post" action="{{url('/e_ac_menu/'. $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <input type="hidden" name="status" id="status" value="1" />
        <input type="hidden" name="status_available" id="status_available" value="1" />
        <input type="hidden" name="id_unit_tenant" id="id_unit_tenant" value="3" />
        <input type="hidden" name="id_menu_category" id="id_menu_category" value="3" />
        
        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Product Code </label>

            <div class="col-sm-9">
                <input type="text" id="kode_menu" name="kode_menu" class="col-xs-10 col-sm-5"
                    value='{{$data->kode_menu}}' disabled />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Product Name </label>

            <div class="col-sm-9">
                <input type="text" id="nama_menu" name="nama_menu" class="col-xs-10 col-sm-5"
                    value='{{$data->nama_menu}}' disabled />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Price </label>

            <div class="col-sm-9">
                <input type="text" id="price" name="price" class="col-xs-10 col-sm-5" value='{{$data->price}}' disabled />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Description </label>

            <div class="col-sm-9">
                <input type="text" id="description" name="description" class="col-xs-10 col-sm-12" value='{{$data->description}}'
                    disabled />
            </div>
        </div>

        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <a href='/e_ac_menu' class="btn btn-primary type=" submit">
                    <i class="ace-icon fa fa-times"></i>
                    CLOSE
                </a>
            </div>
        </div>
    </form>
</div>
