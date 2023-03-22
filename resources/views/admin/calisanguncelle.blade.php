
@extends("layouts.layout")
@section("css")
<style>
.main-div{
    margin-bottom: 50px;
}
</style>
@endsection
@section("main")
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{asset("js/profile.js")}}"></script>


<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<hr>
<div class="container bootstrap snippet main-div">

    <div class="row">
        <div class="col-sm-3"><!--left col-->


            <div class="text-center">
                <form class="form" action="/profilkaydetresim" method="get" id="resimguncellemefor" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{$bilgilerim["id"]}}">
                    <img src="/image/{{$bilgilerim['resim']}}" class="avatar img-circle img-thumbnail" alt="avatar">
                    <h6>Upload a different photo...</h6>"
                    <input  type="file" class="text-center center-block file-upload" name="resim">
                    <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Kaydet </button>
                </form>
            </div><hr><br>

        </div><!--/col-3-->
        <div class="col-sm-9">

            <div class="tab-content">
                <div class="tab-pane active" id="home">

                    <form class="form" action="/calisanguncel" method="get" id="registrationForm">
                        <input type="hidden" value="{{$bilgilerim["id"]}}" name="id">
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>Ad</h4></label>
                                <input type="text" class="form-control" name="first_name" id="first_name"  title="enter your first name if any." value="{{$bilgilerim["ad"]}}">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name"><h4>Soyad</h4></label>
                                <input type="text" class="form-control" name="last_name" id="last_name" title="enter your last name if any." value="{{$bilgilerim["soyad"]}}">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="phone"><h4>Telefon</h4></label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="+90" title="gsm" value="{{$bilgilerim["tel"]}}">
                            </div>
                        </div>



                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Email</h4></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="***@email.com" title="enter your email." value="{{$bilgilerim["mail"]}}">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="password"><h4>Görevi</h4></label>
                                <input type="text" class="form-control" name="gorevi" id="gorevi" title="enter your password." value="{{$bilgilerim["gorev"]}}">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="password2"><h4>Sorumluluk</h4></label>
                                <textarea class="form-control" name="sorumluluk" id="sorumluluk"  title="enter your password2." style="height: 100px">{{$bilgilerim["sorumluluk"]}}</textarea>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                {{--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>--}}
                            </div>
                        </div>

                    </form>

                    <hr>
                </div>
        </div>
    </div>
</div>
</div>
@endsection
