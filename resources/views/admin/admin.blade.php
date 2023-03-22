@extends("admin/layout")
@section("admin_main")
    <div style="width: 83%;margin-left: 325px; margin-top: 60px";>
<div class="jumbotron">
    <div class="row w-100">
        <div class="col-md-3">
            <div class="card border-info mx-sm-1 p-3">
                <div class="card border-info shadow text-info p-3 my-card" ><span class="fa fa-car" aria-hidden="true"></span></div>
                <div class="text-info text-center mt-3"><h4>Aktif Etkinlik</h4></div>
                <div class="text-info text-center mt-2"><h1>{{$aktifetkinlik}}</h1></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-success mx-sm-1 p-3">
                <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye" aria-hidden="true"></span></div>
                <div class="text-success text-center mt-3"><h4>Kayıtlı öğrenci</h4></div>
                <div class="text-success text-center mt-2"><h1>{{$sayogrenci}}</h1></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-danger mx-sm-1 p-3">
                <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fa fa-heart" aria-hidden="true"></span></div>
                <div class="text-danger text-center mt-3"><h4>Kayıtlı Çalışan</h4></div>
                <div class="text-danger text-center mt-2"><h1>{{$saycalisan}}</h1></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-warning mx-sm-1 p-3">
                <div class="card border-warning shadow text-warning p-3 my-card" ><span class="fa fa-inbox" aria-hidden="true"></span></div>
                <div class="text-warning text-center mt-3"><h4>Yapılmış Etkinlik</h4></div>
                <div class="text-warning text-center mt-2"><h1>{{$gecmisetkinlik}}</h1></div>
            </div>
        </div>
    </div>
</div>
    </div>
<!-- end navbar -->
@endsection

