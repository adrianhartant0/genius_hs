<div class="page-header">
    <h1 class="green">
        <i class="ace-icon fa fa-angle-double-right"></i>
        EDIT CONCIERGE
        <i class="ace-icon fa fa-angle-double-left"></i>
        <a href='/concierge' class="btn  btn-yellow btn-sm pull-right type=" submit">
            <i class="ace-icon fa fa-times"></i>
            CLOSE
        </a>
    </h1>
</div><!-- /.page-header -->


<div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <form class="form-horizontal" role="form" id="form_add" method="post" action="{{url('/concierge/view/'. $id)}}">
        @csrf
        <input type="hidden" name="status" id="status" value="{{ $data2->status }}" />
        <input type="hidden" name="id_unit_owner" id="id_unit_owner" value="{{ $data2->id_unit_owner }}" />
        <input type="hidden" name="id_concierge_status" id="id_concierge_status" value="{{ $data2->id_concierge_status }}" />

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> No. Concierge : </label>
            <div class="col-sm-3">
                <label class="col-sm-7 control-label no-padding-left" for="form-field-1">{!! $data2->no_concierge !!}</label>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Concierge Category : </label>
            <div class="col-sm-3">
                <label class="col-sm-7 control-label no-padding-left" for="form-field-1">{!!
                    $kode_concierge_category[0] !!}</label>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2 no-padding-right" for="first-name">No. Unit / Unit Owner</label>

            <div class="col-sm-3">
                <label class="control-label col-sm-7 no-padding-left" for="form-field-1">
                    @foreach($data_no_unit_apart as $item)
                    {!! $item->NamaPenghuni !!}
                    @endforeach
                </label>
            </div>
        </div>
        <hr />

        <div class="form-group">
            <label class="control-label col-sm-2 no-padding-right" for="first-name">Concierge Employee</label>

            <div class="col-sm-3">
                @if(Auth::user()->priv_status == 1 || Auth::user()->priv_status == 2 || Auth::user()->priv_status == 3
                || Auth::user()->priv_status == 13)
                @if(Auth::user()->priv_status == 13 )
                <label class="control-label col-sm-7 no-padding-right">{{ Auth::user()->name }}</label>
                <input type="hidden" name="concierge_login" value="{{ $data2->concierge_login }}">
                @else
                @if($data_concierge_employee == 'Error')
                <label class="control-label col-sm-7 no-padding-right">Tidak ada concierge tersedia, mohon menunggu..</label>
                @else
                <div class="col-sm-9">
                    <select class="chosen-select  form-control" for="concierge_employee" name="concierge_login">
                        @foreach($data_concierge_employee as $item)
                        <option value="{{ $item->concierge_login }}">
                            {!! $item->nama_concierge_employee !!}
                        </option>
                        @endforeach
                    </select>
                    @endif
                    @endif

                    @else
                    @foreach($data_concierge_employee as $itemnya)
                    <label class="control-label col-md-6 col-sm-3 col-xs-12">{{ $itemnya->nama_concierge_employee }}</label>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2 no-padding-right" for="first-name">Concierge Status</label>

            <div class="col-sm-3">
                @if(Auth::user()->priv_status == 1 || Auth::user()->priv_status == 2 || Auth::user()->priv_status == 3
                || Auth::user()->priv_status == 13)
                <div class="col-sm-9">
                    <select class="chosen-select form-control" for="concierge_status" name="id_concierge_status">
                        @foreach($data_concierge_status as $item)
                        @php
                        foreach ($data_no_unit_apart as $value) {
                        $idConcStatus = $value->id_concierge_status;
                        $selected = ($item->id_concierge_status == $value->id_concierge_status) ? 'selected' : '';
                        }

                        @endphp
                        <option value="{{ $item->id_concierge_status }}" {{ $selected }}>
                            {!! $item->nama_concierge_status !!}
                        </option>

                        @endforeach
                    </select>
                    @else
                    @foreach($data_no_unit_apart as $itemnya)
                    <label class="control-label col-sm-2 no-padding-right">{{ $itemnya->nama_concierge_status }}</label>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label  col-sm-2 " for="first-name">Description</label>
            <div class="col-sm-9">
                <div class="col-sm-9">
                    <textarea id="description" name="description" class="form-control col-md-7 col-xs-12 noresize" rows="4"
                        disabled="disable">{!! $data2->description !!}</textarea>
                </div>
            </div>
        </div>
        <hr>

        @if(Auth::user()->priv_status == 1)
        <div class="form-group">
            <label class="control-label  col-sm-2 " for="first-name">Message</label>
            <div class="col-sm-9">
                <div class="col-sm-9">
                    <textarea id="response_admin" name="response_admin" required="required" class="form-control col-md-7 col-xs-12 noresize"
                        rows="4"></textarea>
                </div>

                @elseif(Auth::user()->priv_status == 13)
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Message</label>
                    <<div class="col-sm-9">
                        <div class="col-sm-9">
                            <textarea id="response_conc" name="response_conc" required="required" class="form-control col-md-7 col-xs-12 noresize"
                                rows="4"></textarea>
                        </div>
                </div>
                @endif
            </div>
            <!-- <hr/>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Engineerings Respon</label>
            @if(Auth::user()->priv_status==8 || Auth::user()->priv_status==9)
                @foreach($data_no_unit_apart as $itemnya)
                    @php
                        $isi_ket = (empty($itemnya->ket_respon)) ? '' : $itemnya->ket_respon;
                        $disable = (empty($itemnya->ket_respon)) ? '' : "disabled=disable" ;
                    @endphp
                @endforeach

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea id="engineer_respon" name="engineer_respon" required="required" class="form-control col-md-7 col-xs-12 noresize"
                                rows="3" {{ $disable }}>{{ $isi_ket }}</textarea>
                </div>
            @else
                @foreach($data_no_unit_apart as $itemnya)
                    @php
                        $isi_ket = (empty($itemnya->ket_respon)) ? ' - ' : $itemnya->ket_respon;
                    @endphp
                    <label class="control-label col-md-6 col-sm-3 col-xs-12">{{ $isi_ket }}</label>
                @endforeach
            @endif
            </div>
        </div> -->
        </div>

        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <a href='/concierge' class="btn btn-primary type=" submit">
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


<script type="text/javascript">
    function change(item) {
        $(item).parents(".checkbox").find("textarea").toggleClass("hide");
    }

</script>
