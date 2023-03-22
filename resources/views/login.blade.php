<!DOCTYPE html>
<html>

<head>
    <title>Login and Register</title>
    <link rel="stylesheet" href="/css/register.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

</head>

<body>
<div class="hero">
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">Giriş Yap</button>
            <button type="button" class="toggle-btn" onclick="register()">Kayıt Ol</button>
        </div>
        <form id="login" class="input-group" method="GET" action="/girisyap">
            <input type="text" name="mail" class="input-field" placeholder="Mail" required>
            <input type="password" name="sifre" class="input-field" placeholder="Şifre" required>
            <input type="checkbox" class="check-box"> <span>Şifreyi hatırla</span>
            <button type="submit" name="giris" class="submit-btn">Giriş Yap</button>
        </form>
        <form id="register" class="input-group" method="get" action="/kayitol">
            <input type="text" name="ad" class="input-field" placeholder="Ad" required autocomplete="off">
            <input type="text" name="soyad" class="input-field" placeholder="Soyad" required autocomplete="off">
            <input type="email" name="email" class="input-field" placeholder="Mail" required autocomplete="off">
            <input type="text" name="no" class="input-field" placeholder="Okul numarası" required
                   autocomplete="off">
            <input type="text" name="sinif" class="input-field" placeholder="Sınıf" required autocomplete="off">
            <select onchange="bolumlerimigetir()" id="fakulte" name="fakulte">
                <option disabled hidden selected> Lütfen fakülte seçiniz</option>
                @foreach($fakulteler as $fakulte)
                    <option value="{{$fakulte->id}}">{{$fakulte->fakulte_adi}}</option>

                @endforeach
            </select>
            <select id="bolum" name="bolum">
                <option disabled hidden selected> Lütfen önce fakülte seçiniz</option>
            </select>
            <input type="text" name="iletisim" class="input-field" placeholder="İletişim" required
                   autocomplete="off">
            <input type="password" name="password" class="input-field" placeholder="Şifre" required autocomplete="off">
            <input type="hidden" value="1" name="pozisyon">
            <input type="checkbox" class="check-box"><span>Şartlar ve koşulları kabul ediyorum.</span>
            <button type="submit" name="kayit" class="submit-btn">Kayıt Ol</button>
        </form>
    </div>
</div>
<script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");

    function register() {
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";

    }

    function login() {
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0px";

    }
    login();

    function bolumlerimigetir()
    {
        $("#bolum").find("option").remove().end().append(
            '<option disabled hidden selected>lütfen bölüm seçiniz</option>');
        var fakulte_id=document.getElementById("fakulte").value;
        $.ajax({
            url:"/bolumlerigetir/"+fakulte_id,
            type:"get",
            success:function (bolumlerim){
                bolumlerim.forEach(setbolum);
            }
        })
    }
    function setbolum(item)
    {
        var bolum= document.createElement("option");
        document.getElementById("bolum").add(bolum);
        bolum.value=item.id;
        bolum.text=item.bolum_adi;
    }

</script>
</body>

</html>
