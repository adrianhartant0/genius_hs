<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Unit Tenant List</h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        @foreach ($data as $item)
        <div class="col-md-3">
            <div style="height: 100px;max-height: 100px;width: 100%;text-align: center;border:1px solid #DDD; border-radius: 4px;">
                <div>
                    <h3>{{$item->nama_unit_tenant}}</h3>
                </div>
                <div>
                    <a href="/order_menu_tenant/{{$item->id_unit_tenant}}/show" class="btn btn-primary">
                        Lihat menu
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
