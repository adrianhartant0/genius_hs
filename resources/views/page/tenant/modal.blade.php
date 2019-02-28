<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clear_data()"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add/Edit Tenant</h4>
            </div>
            <div class="modal-body">
                <form id="form_add">
                    <input type="hidden" name="state" id="state" value="add" />
                    <input type="hidden" name="table" id="table" value="mst_tenant" />
                    <input type="hidden" name="status" id="status" value="1" />
                    <input type="hidden" name="wherefield" id="wherefield" value="id_tenant" />
                    <input type="hidden" name="whereval" id="whereval" value="" />

                    <div class="row">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tenant Code <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="kode_tenant" name="kode_tenant" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                    </div>
                    <hr />

                    <div class="row">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tenant Name <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="nama_tenant" name="nama_tenant" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                    </div>
                    <hr />

                    <div class="row">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> Owner Name <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" id="id_owner" name="id_owner" required="required">

                                </select>
                            </div>
                        </div>
                    </div>
                    <hr />

                    <div class="row">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> Tower Name <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" id="id_tower" name="id_tower" required="required">

                                </select>
                            </div>
                        </div>
                    </div>
                    <hr />

                    <div class="row">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> Floor <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" id="id_floor" name="id_floor" required="required">

                                </select>
                            </div>
                        </div>
                    </div>
                    <hr />

                    <div class="row">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telephone Number
                                <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="no_telp_tenant" name="no_telp_tenant" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                    </div>
                    <hr />

                    <div class="row">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="email_tenant" name="email_tenant" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="clear_data()">Close</button>
                <button type="button" class="btn btn-primary" name="add" id="add" onclick="save()">Save</button>
            </div>
        </div>
    </div>
</div>
