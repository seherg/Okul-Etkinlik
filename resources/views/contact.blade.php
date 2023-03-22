
@extends("layouts.layout")
@section("css")
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="{{asset("css/contact.css")}}" rel="stylesheet" type="text/css" media="all">
<script src="{{asset('js/contact.js')}}"></script>

@endsection
@section("main")
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="col-md-5">
        <div class="form-area">
            <form role="form">
                <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">İletişim Formu</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="İsim" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Telefon" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Konu" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Mesaj" maxlength="140" rows="7"></textarea>
                    <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
                </div>

                <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Gönder</button>
            </form>
        </div>
    </div>
</div>
@endsection
