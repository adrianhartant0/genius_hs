<div class="page-header">
    <h1 class="pink">
        <i class="ace-icon fa fa-angle-double-right"></i>
        DELETE COMPLAIN
        <i class="ace-icon fa fa-angle-double-left"></i>
    </h1>
</div><!-- /.page-header -->

<div class="col-xs-12">
    <form class="form-horizontal" role="form" id="form_add" method="post" action="{{url('/complain_category/'. $id)}}">
        @csrf
        <p class="alert alert-danger">
            Are you sure delete <b> "{{$data->kode_complain_category}} / {{$data->nama_complain_category}} ?"</b></p>
        <input name="_method" type="hidden" value="DELETE">


        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <a href='/complain_category' class="btn btn-primary type=" submit">
                    <i class="ace-icon fa fa-times"></i>
                    NO
                </a>
                &nbsp; &nbsp; &nbsp;
                <button class="btn btn-danger type=" submit" name="add" id="add">
                    <i class="ace-icon fa fa-trash bigger-110"></i>
                    YES
                </button>
            </div>
        </div>
    </form>
</div>
