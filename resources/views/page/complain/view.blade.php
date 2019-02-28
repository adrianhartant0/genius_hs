<div class="page-header">
    <h1 class="green">
        <i class="ace-icon fa fa-angle-double-right"></i>
        VIEW COMPLAIN
        <i class="ace-icon fa fa-angle-double-left"></i>
        <a href='/complain' class="btn  btn-yellow btn-sm pull-right type=" submit">
            <i class="ace-icon fa fa-times"></i>
            CLOSE
        </a>
    </h1>
</div><!-- /.page-header -->


<div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <form class="form-horizontal" role="form" id="form_add" method="post" action="{{url('/complain/update/'. $id2)}}">
        @csrf
        <input type="hidden" name="status" id="status" value="{{ $data2->status }}" />
        <input type="hidden" name="id_unit_owner" id="id_unit_owner" value="{{ $data2->id_unit_owner }}" />
        <input type="hidden" name="id_complain_status" id="id_complain_status" value="{{ $data2->id_complain_status }}" />

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> No. Complain </label>
            <div class="col-sm-4">
                <label class="col-sm-2 control-label no-padding-right" for="form-field-1">{!! $data2->no_complain !!}</label>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Complain Category </label>
            <div class="col-sm-4">
                <label class="col-sm-2 control-label no-padding-right" for="form-field-1">{!!
                    $kode_complain_category[0] !!}</label>
            </div>
        </div>
        <hr />

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No. Unit / Unit Owner Name</label>

            <div class="col-md-6 col-sm-6 col-xs-5">
                <label class="control-label col-md-6 col-sm-3 col-xs-12" for="first-name">
                    @foreach($data_no_unit_apart as $item)
                    {!! $item->NamaPenghuni !!}
                    @endforeach
                </label>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Complain Status</label>

            <div class="col-md-6 col-sm-6 col-xs-5">
                @if(Auth::user()->priv_status == 1 || Auth::user()->priv_status == 2 || Auth::user()->priv_status == 3)
                <select class="control-label col-md-6 col-sm-3 col-xs-12" for="complain_status" name="id_complain_status">
                    @foreach($data_complain_status as $item)
                    @php
                    foreach ($data_no_unit_apart as $value) {
                    $selected = ($item->id_complain_status == $value->id_complain_status) ? 'selected' : '';
                    }

                    @endphp
                    <option value="{{ $item->id_complain_status }}" {{ $selected }}>
                        {!! $item->nama_complain_status !!}
                    </option>

                    @endforeach
                </select>
                @else
                @foreach($data_no_unit_apart as $itemnya)
                <label class="control-label col-md-6 col-sm-3 col-xs-12">{{ $itemnya->nama_complain_status }}</label>
                @endforeach
                @endif
            </div>
        </div>

        <hr />

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea id="description" name="description" required="required" class="form-control col-md-7 col-xs-12 noresize"
                    rows="4" disabled="disable">{{ $data2->description }}</textarea>
            </div>
        </div>

        <hr />

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

        @foreach($data_no_unit_apart as $itemnya)
        @php
        $labelJudul2 = '';
        $labelIsi2 = '';
        $labelJudul = '';
        $labelIsi = '';
        if (!empty($itemnya->tgl_onproses)) {
        $labelIsi = "<label class='control-label col-md-6 col-sm-3 col-xs-12'> $itemnya->tgl_onproses</label>";
        $labelJudul = "
        <hr>
        <div class='row'>
            <div class='form-group'>
                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='first-name'>On Process Date</label>
                ".$labelIsi.
                "</div>
        </div>";

        }
        elseif (!empty($itemnya->tgl_done)) {
        $labelIsi2 = "<label class='control-label col-md-6 col-sm-3 col-xs-12'> $itemnya->tgl_done</label>";
        $labelJudul2 = "
        <hr>
        <div class='row'>
            <div class='form-group'>
                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='first-name'>Done Date</label>".$labelIsi2.
                "</div>
        </div>";

        }
        elseif (!empty($itemnya->tgl_done) && !empty($itemnya->tgl_onproses)) {
        $labelIsi2 = "<label class='control-label col-md-6 col-sm-3 col-xs-12'> $itemnya->tgl_done</label>";
        $labelJudul2 = "
        <hr>
        <div class='row'>
            <div class='form-group'>
                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='first-name'>Done Date</label>".$labelIsi2.
                "</div>
        </div>";
        $labelIsi = "<label class='control-label col-md-6 col-sm-3 col-xs-12'> $itemnya->tgl_onproses</label>";
        $labelJudul = "
        <hr>
        <div class='row'>
            <div class='form-group'>
                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='first-name'>On Process Date</label>
                ".$labelIsi.
                "</div>
        </div>";
        }

        @endphp
        {!! $labelJudul2 !!}
        {!! $labelJudul !!}

        @endforeach
    </form>
</div>
