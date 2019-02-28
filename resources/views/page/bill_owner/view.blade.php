<div class="page-header">
    <h1 class="green">
        <i class="ace-icon fa fa-angle-double-right"></i>
        VIEW PAYMENT
        <i class="ace-icon fa fa-angle-double-left"></i>
        <a href='/bill_owner' class="btn  btn-yellow btn-sm pull-right type=" submit">
            <i class="ace-icon fa fa-times"></i>
            CLOSE
        </a>
    </h1>
</div><!-- /.page-header -->

<div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <form id="form_bill" name="fbill" method="post" action="{{url('/bill_owner/save_payment/'.$id)}}">
                @csrf
                <input type="hidden" name="status" id="status" value="1" />        
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bill No.</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label>{{$bill_owner->kode_billing}}</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Invoice Date</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label>{{$bill_owner->tgl_cetak}}</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Due Date</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label>{{$bill_owner->tgl_jatuh_tempo}}</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Grace Periode</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label>{{$bill_owner->tgl_grace_periode}}</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Occupant</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label>{{$data_unit_owner->namaPenghuni}}</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Unit Number</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label>{{$data_unit_owner->namaApart}}</label>
                        </div>
                    </div>
                </div>
                <hr style='border: 1px solid grey;'/>
                <h4>Billing Detail</h4>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Electricity</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label>{{number_format($bill_owner->total_tagihan)}}</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Water</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label>{{number_format($bill_owner->total_tagihan_air)}}</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SC, Insurance, PBB, etc</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label>{{number_format($bill_owner->jml_sc_ikkl)}} | ({{$bill_owner->keterangan_sc_ikkl}})</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Stamp Fee</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label>{{number_format($bill_owner->biaya_materai)}}</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Forfeit Fee</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label>{{number_format($denda)}}</label>
                        </div>
                    </div>
                </div>
                <hr style='border: 1px solid grey;'/>
                <table width="1200px">
                    <thead>
                        <tr >
                            <th>Total Billing: {{number_format($bill_owner->total_tagihan_all + $denda)}}</th>
                            <th>Total Paid: {{number_format($bill_owner->jml_bayar)}}</th>
                            <th>Bill Remain: {{number_format(($bill_owner->total_tagihan_all + $denda) - $bill_owner->jml_bayar)}}</th>
                        </tr>
                    </thead>
                </table>
                <hr style='border: 1px solid grey;'/>
                <h4>Payment Data</h4>
                <table class="table table-bordered">
                <thead>
                        <tr>
                            <th>Payment No.</th>
                            <th>Payment Date</th>
                            <th>Amount Paid</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($payment_owner as $value)
                        <tr>
                            <td>{{$value->kode_payment}}</td>
                            <td>{{$value->periode_bayar}}</td>
                            <td>{{number_format($value->jml_bayar)}}</td>
                            <td>{{$value->keterangan}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        
                {{-- @if(!empty($payment_owner))
                    <h4>Last Payment</h4>
                    <hr>
                @endif
                @foreach($payment_owner as $value)
                    <div class="row">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Payment Date<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>{{$value->tgl_bayar}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Amount of Payment<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>{{$value->jml_bayar}}</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>{{$value->keterangan}}</label>
                            </div>
                        </div>
                    </div>    
                    <hr>
                @endforeach
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Payment Date<span class="required">*</span></label>
                        <div class="col-md-2 col-sm-6 col-xs-12 input-group date" id='datetimepicker1'>
                            <input type='text' id="tgl_lahir" name="tgl_bayar" required="required" class="form-control col-md-7 col-xs-12" style="margin-left: 9px;" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>          
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Amount of Payment<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="jml_bayar" value="">
                        </div>

                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name">Description<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea id="description" name="descriptionPay" required="required" class="form-control col-md-7 col-xs-12 noresize"
                                        rows="2" style="margin-left: -90px;">
                            </textarea>
                        </div>
                    </div>
                </div>--}}
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-offset-10 col-xs-12">
                            
                            <a href='/bill_owner'>
                                <button type="button" class="btn btn-default">Close</button>
                            </a>    
                            
                        </div>
                                   
                    </div>
                </div> 
        </form>
    </div>
  </div>
 </div>
</div>