<div class="page-header">
    <h1 class="green">
        <i class="ace-icon fa fa-angle-double-right"></i>
        ADD CONCIERGE
        <i class="ace-icon fa fa-angle-double-left"></i>
        <a href='/concierge' class="btn  btn-yellow btn-sm pull-right type=" submit">
            <i class="ace-icon fa fa-times"></i>
            CLOSE
        </a>
    </h1>
</div><!-- /.page-header -->

<div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <form class="form-horizontal" role="form" id="form_add" method="post" action="{{url('/concierge')}}">
        @csrf
        <input type="hidden" name="status" id="status" value="1" />
        @if(Auth::user()->priv_status == 10)
        @foreach ($unit_owner as $item2)
        <input type="hidden" name="id_unit_owner" id="id_unit_owner" value="{{ $item2->id_unit_owner }}" />
        <input type="hidden" name="no_unit_apart" id="no_unit_apart" value="{{ $item2->no_unit_apart }}" />
        @endforeach
        @endif
        <input type="hidden" name="id_concierge_status" id="id_concierge_status" value="1" />

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Concierge Category </label>
            <div class="col-sm-7">
                @foreach ($namaCategoryConcierge as $id=>$item)
                <div class="checkbox" id='chx{{ $item->kode_concierge_category }}'>
                    <label>
                        <input type="checkbox" value="{{ $item->id_concierge_category }}" id="{{ $item->kode_concierge_category }}"
                            name="conciergeCategory[{{$id}}][id]" onclick="change(this)">
                        {{ $item->nama_concierge_category }}
                    </label>
                    <textarea id="description{{ $item->kode_concierge_category }}" name="conciergeCategory[{{$id}}][description]"
                        class="form-control noresize hide" rows="1"></textarea>
                </div>
                @endforeach
            </div>
        </div>

        @if(Auth::user()->priv_status==1 || Auth::user()->priv_status==2 || Auth::user()->priv_status==3)
        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Unit Owner </label>
            <div class="col-sm-4">
                <select class="chosen-select form-control" name="id_unit_owner" id="form-field-select-3"
                    data-placeholder="Choose Unit Owner...">
                    <option value=""> </option>
                    @foreach ($unit_owner as $item)
                    <option value="{{ $item->id_unit_owner }}">{{ $item->namaPenghuni }}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>
        @endif
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


<script type="text/javascript">
    function change(item) {
        $(item).parents(".checkbox").find("textarea").toggleClass("hide");
    }
</script>
