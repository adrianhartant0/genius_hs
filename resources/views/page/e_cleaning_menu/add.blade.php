<div class="page-header">
    <h1 class="green">
        <i class="ace-icon fa fa-angle-double-right"></i>
        ADD TENANT MENU
        <i class="ace-icon fa fa-angle-double-left"></i>
        <a href='/e_cleaning_menu' class="btn  btn-yellow btn-sm pull-right type=" submit">
            <i class="ace-icon fa fa-times"></i>
            CLOSE
        </a>
    </h1>
</div><!-- /.page-header -->

<div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <form class="form-horizontal" role="form" id="form_add" method="post" action="{{url('/e_cleaning_menu')}}">
        @csrf
        <input type="hidden" name="status" id="status" value="1" />
        <input type="hidden" name="status_available" id="status_available" value="1" />
        <input type="hidden" name="id_unit_tenant" id="id_unit_tenant" value="2" />
        <input type="hidden" name="id_menu_category" id="id_menu_category" value="2" />

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Product Code </label>

            <div class="col-sm-9">
                <input type="text" id="kode_menu" name="kode_menu" placeholder="Code" class="col-xs-10 col-sm-5"
                    required />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Product Name </label>

            <div class="col-sm-9">
                <input type="text" id="nama_menu" name="nama_menu" placeholder="Name" class="col-xs-10 col-sm-5"
                    required />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Price </label>

            <div class="col-sm-9">
                <input type="text" id="price" name="price" placeholder="Rp." class="col-xs-10 col-sm-5" required />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Description </label>

            <div class="col-sm-9">
                <input type="text" id="description" name="description" placeholder="Description" class="col-xs-10 col-sm-12"
                    required />
            </div>
        </div>

        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <button class="btn" type="reset">
                    <i class="ace-icon fa fa-undo bigger-110"></i>
                    Reset
                </button>
                &nbsp; &nbsp; &nbsp;
                <button class="btn btn-success type=" submit" name="add" id="add">
                    <i class="ace-icon fa fa-plus bigger-110"></i>
                    Save
                </button>
            </div>
        </div>
    </form>
</div>
