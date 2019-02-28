<div class="page-header">
    <h1 class="green">
        <i class="ace-icon fa fa-angle-double-right"></i>
        VIEW PAYMENT
        <i class="ace-icon fa fa-angle-double-left"></i>
        <a href='/receiveable_card' class="btn  btn-yellow btn-sm pull-right type=" submit">
            <i class="ace-icon fa fa-times"></i>
            CLOSE
        </a>
    </h1>
</div><!-- /.page-header -->

<div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <form id="form_bill" name="fbill" method="post" action="{{url('/bill_owner/'.$id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <input type="hidden" name="status" id="status" value="1" />

        <div class="row">
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Unit Owner</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label>{{$data_unit_owner->namaPenghuni}}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Unit Number</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label>{{$data_unit_owner->nomorUnit}}</label>
                </div>
            </div>
        </div>
        <hr style='border: 1px solid grey;' />
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Invoice Date</th>
                    <th>Due Date</th>
                    <th>Description</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Balance</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
