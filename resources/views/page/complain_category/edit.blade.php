<div class="page-header">
    <h1 class="orange">
        <i class="ace-icon fa fa-angle-double-right"></i>
        EDIT COMPLAIN
        <i class="ace-icon fa fa-angle-double-left"></i>
    </h1>
</div><!-- /.page-header -->

<div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <form class="form-horizontal" role="form" id="form_add" method="post" action="{{url('/complain_category/'. $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <input type="hidden" name="status" id="status" value="1" />
        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Complain Code </label>

            <div class="col-sm-9">
                <input type="text" id="kode_complain_category" name="kode_complain_category" placeholder="Complain Code"
                    class="col-xs-10 col-sm-5" value='{{$data->kode_complain_category}}'>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Complain Name </label>

            <div class="col-sm-9">
                <input type="text" id="nama_complain_category" name="nama_complain_category" placeholder="Complain Name"
                    class="col-xs-10 col-sm-5" value='{{$data->nama_complain_category}}'>
            </div>
        </div>

        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <a href='/complain_category' class="btn btn-primary type=" submit">
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
