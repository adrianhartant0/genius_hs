<div class="page-header">
    <h1 class="orange">
        <i class="ace-icon fa fa-angle-double-right"></i>
        EDIT CONCIERGE EMPLOYEE
        <i class="ace-icon fa fa-angle-double-left"></i>
        <a href='/concierge_employee' class="btn  btn-yellow btn-sm pull-right type=" submit">
            <i class="ace-icon fa fa-times"></i>
            CLOSE
        </a>
    </h1>
</div><!-- /.page-header -->

<div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <form class="form-horizontal" role="form" id="form_add" method="post" action="{{url('/concierge_employee/'. $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <input type="hidden" name="status" id="status" value="1" />
        <input type="hidden" name="status_available" id="status_available" value="1" />

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Concierge Employee Name </label>

            <div class="col-sm-9">
                <input type="text" id="nama_concierge_employee" name="nama_concierge_employee" class="col-xs-10 col-sm-5"
                    value='{{$data->nama_concierge_employee}}'>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Birth Date </label>

            <div class="col-sm-3">
                <div class="input-group">
                    <input class="form-control date-picker" id="id-date-picker-1" name="tgl_lahir" type="text"
                        data-date-format="dd-mm-yyyy" value='{{$data->tgl_lahir}}'>
                    <span class="input-group-addon">
                        <i class="fa fa-calendar bigger-110"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <a href='/concierge_employee' class="btn btn-primary type=" submit">
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
