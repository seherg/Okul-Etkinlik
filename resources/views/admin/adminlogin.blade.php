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
        </div>
        <form id="login" class="input-group" method="GET" action="/admingirisyap">
            <input type="text" name="mail" class="input-field" placeholder="Mail" required>
            <input type="password" name="sifre" class="input-field" placeholder="Şifre" required>
            <button type="submit" name="giris" class="submit-btn">Giriş Yap</button>
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

</script>
</body>

</html>
