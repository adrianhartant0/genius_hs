<form id="form_add" method="post" action="{{url('/marketing/'. $id)}}">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clear_data()"><span
                aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Marketing</h4>
    </div>
    <div class="modal-body">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <input type="hidden" name="status" id="status" value="1" />   
        <div class="row">
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Marketing Name <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-5">
                    <input type="text" id="nama_marketing" name="nama_marketing" required="required" class="form-control col-md-7 col-xs-12" value='{{$data->nama_marketing}}'>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href='/marketing'>
            <button type="button" class="btn btn-default">Close</button>
        </a>
        <button type="submit" class="btn btn-primary" name="add" id="add">Save</button>
    </div>
</form>
