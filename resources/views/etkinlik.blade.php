@php
if(!isset($_SESSION)){
    session_start();
}
@endphp

@extends("layouts.layout")
@section("css")
    <link href="{{asset('css/etkinlik.css')}}" rel="stylesheet" type="text/css" media="all">
@endsection
@section("main")
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container-fluid bg-full p-0">
        <h1 class=" text-center pt-5 py-4 display-3 text-white">Bu Haftasonu <span class="color1">Nerdeyiz ?</span></h1>
        <div class="row col-sm-10 text-center m-auto">
@foreach($etkinlikler as $etkinlik)

            <div class="col-lg-4 item-fa example p-3">
                <div class="item-container">
                    <div class="wrapper">
                        <div class="item-date">{{$etkinlik['baslangic_zamani']}}</div>
                        <div class="item-category">
                            @if(isset($_SESSION["login"]))
                                <a href="/katilim/{{$etkinlik["etkinlik_id"]}}/{{$_SESSION["user_id"]}}">Kayıt Ol</a>
                            @else
                                <a href="/login">Kayıt Ol</a>
                            @endif
                        </div>
                        <div class="item-title clearfix "><h1 class="text-light pt-3 ">{{$etkinlik['etkinlik_adi']}}</h1></div>
                        <div class="icon my-4"><img src="{{asset('image/'.$etkinlik['resim'])}}"></div>
                        <div class="item-description text-white">{{$etkinlik['bilgi']}}</div>
                        <div class="item-description text-white">Katılabilecek öğrenci sayısı:{{$etkinlik['kota']}}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
