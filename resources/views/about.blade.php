@extends("layouts.layout")
@section("css")

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="{{asset("css/about.css")}}" rel="stylesheet" type="text/css" media="all">

<!------ Include the above in your HEAD tag ---------->

<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
@endsection
@section("main")
<div class="aboutus-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="aboutus">
                    <h2 class="aboutus-title">Hakkımızda</h2>
                    <p class="aboutus-text">Üniversitemiz birçok etkinlik düzenliyor. Öğrencilerin bu etkinliklere sosyal medya üzerinden öğrenmesi ve katılması birtakım zorluklar içeriyor. Bu site sayesinde kolaylıkla kayıt yapıp etkinliklerden haberdar olabilme şansını yakalıyorlar. Çalışanları ve çalışanların sorumluluklarını öğrenebiliyorlar. </p>
                    <a class="aboutus-more" href="#">read more</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="aboutus-banner">
                    <img src="image/aa.jpg" alt="" style="width: 300px; height: 250px;">
                </div>
            </div>
            <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="feature">
                    <div class="feature-box">
                        <div class="clearfix">
                            <div class="iconset">
                                <span class="glyphicon glyphicon-cog icon"></span>
                            </div>
                            <div class="feature-content">
                                <h4>Her Hafta Yeni Etkinlik</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-box">
                        <div class="clearfix">
                            <div class="iconset">
                                <span class="glyphicon glyphicon-cog icon"></span>
                            </div>
                            <div class="feature-content">
                                <h4>Güler yüzlü ekibimiz</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-box">
                        <div class="clearfix">
                            <div class="iconset">
                                <span class="glyphicon glyphicon-cog icon"></span>
                            </div>
                            <div class="feature-content">
                                <h4>Kolay katılım</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
