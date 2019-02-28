<script>
    $font = Font_Metrics::get_font("helvetica", "normal");

</script>
<style>
    .page-break {
        page-break-after: always;
    }

    body {
        margin-top: 49px;
        font-size: 9px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .kop-atas {
        text-align: left;
        padding-left: 500px;
    }

    /* table,
    th,
    td {
        border: 1px solid black;
    } */

    table {
        border-spacing: 0px;
        border-collapse: separate;
    }

    .alamat {
        display: block;
        min-height: 300px;
    }

</style>
@foreach ($payment_owner as $key => $item)
@if($key >0)
<div class="page-break"></div>
@endif
<table style="width:77%;">
    <tr>
        <td colspan="4" class="kop-atas">{{$item->kode_tower}} {{$item->no_floor}}/{{$item->no_unit_apart}}</td>
    </tr>
    <tr>
        <td colspan="4" class="kop-atas" style="height:7px"></td>
    </tr>
    <tr>
        <td colspan="4" class="kop-atas">{{$item->nama_depan}}</td>
    </tr>
    <tr>
        <td colspan="4" class="kop-atas">
            <div class="alamat">{{$item->kode_payment}}</div>
        </td>
    </tr>
    <tr>
        <td colspan="4" style="height:8px;"></td>
    </tr>
    <tr>
        <td colspan="4" class="kop-atas">{{$item->periode_bayar}}</td>
    </tr>
    <tr>
        <td colspan="4" style="height:24px;"></td>
    </tr>
    <tr>
        <td style="width:10%;">{{$item->kode_billing}}</td>
        <td colspan="2" style="width:440px;">{{$item->keterangan}}</td>
        <td style="text-align:right;width:50%;padding-right:75px;">{{number_format($item->jml_bayar)}}</td>
    </tr>
    <tr>
        <td colspan="4" style="width:25%;text-align:right;height:179px;"></td>
    </tr>
    <tr>
        <td colspan="4" style="text-align:right;padding-right:75px;">{{number_format($item->jml_bayar)}}</td>
    </tr>
    <tr>
        <td colspan="4" style="width:25%;text-align:right;height:60px;"></td>
    </tr>
    <tr>
        <td colspan="4" style="text-align:right;padding-right:40px;">PAULUS HARMINTO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
</table>
@endforeach
