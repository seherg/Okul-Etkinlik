@extends("layouts.layout")
@section("css")


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="{{asset("css/employee.css")}}" rel="stylesheet" type="text/css" media="all">
@endsection
@section("main")


<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">TAKIMIMIZ</h5>
        <div class="row">
            <!-- Team member -->
            @foreach($calisanlar as $calisan)
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{URL("image/".$calisan["resim"])}}" alt="card image"></p>
                                    <h4 class="card-title">{{$calisan["calisan_adi"]." ".$calisan["calisan_soyadi"]}}</h4>
                                    <p class="card-text">{{$calisan["gorevi"]}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sorumlulukları</h4>
                                    <p class="card-text">{{$calisan["sorumluluk"]}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
<!-- Team -->
