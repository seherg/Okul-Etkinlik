<?php
if(!isset($_SESSION))
{
    session_start();
}
?>

    <!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gezdolas</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="{{asset("image/svg+xml")}}">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{asset("css/app.css")}}">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    @yield("css")

</head>

<body id="top">
<!--
- #HEADER
-->

<header class="header" data-header>
    <div class="container">

        <a href="/">
            <h1 class="logo">GezDolaş</h1>
        </a>

        <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
            <ion-icon name="menu-outline" class="open"></ion-icon>
            <ion-icon name="close-outline" class="close"></ion-icon>
        </button>

        <nav class="navbar">

            <ul class="navbar-list">

                <li>
                    <a href="/etkinlik" class="navbar-link">Etkinlikler</a>
                </li>

                <li>
                    <a href="/calisan" class="navbar-link">Çalışanlarımız</a>
                </li>

                <li>
                    <a href="/hakkimizda" class="navbar-link">Hakkımızda</a>
                </li>


            </ul>
            <?php
            if (isset($_SESSION["login"])) {
                echo '<a href="/profil" class="btn btn-secondary">'.$_SESSION["username"]." ".$_SESSION["usersurname"].'</a>';
                echo '<a href="/cikis" class="btn btn-secondary" style="margin-left:15px;">Çıkış Yap</a>';
            }
            else{
                echo  '<a href="/login" class="btn btn-secondary">Giriş Yap</a>';
            }
            ?>

        </nav>

    </div>
</header>

@yield("main")
<footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">
    <div class="container">

        <div class="footer-top">

            <ul class="footer-list">

                <li>
                    <p class="footer-list-title">Aktif Geziler</p>
                </li>

                <li>
                    <a href="#" class="footer-link">Diyarbakır, Ulu Camii</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Elazığ, Hazar Gölü</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Tunceli, Pertek</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Elazığ, Çırçır Şelalesi</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Malatya, Orduzu</a>
                </li>

            </ul>

            <ul class="footer-list">



            </ul>

            <ul class="footer-list">

                <li>
                    <p class="footer-list-title">Hızlı Erişim</p>
                </li>

                <li>
                    <a href="#" class="footer-link">Etkinlikler</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Çalışanlarımız</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Hakkımızda</a>
                </li>

                <li>
                    <a href="#" class="footer-link">İletişim</a>
                </li>

            </ul>

            <div class="footer-list">

                <p class="newsletter-text">
                    Yeni etkinliklerden haberdar olmak ister misiniz?
                </p>

                <form action="" class="newsletter-form">
                    <input type="email" name="email" required placeholder="@gmail.com"
                           class="newsletter-input">

                    <button type="submit" class="btn btn-primary">Abone Ol</button>
                </form>

            </div>

        </div>

        <div class="footer-bottom">

            <a href="#" class="logo">GezDolaş</a>

            <p class="copyright">
                &copy; 2022 <a href="#" class="copyright-link">codewithsadee</a>. Tüm hakları gizlidir.
            </p>

            <ul class="social-list">

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-google"></ion-icon>
                    </a>
                </li>

            </ul>

        </div>

    </div>
</footer>


<a href="#top" class="go-top" data-go-top aria-label="Go To Top">
    <ion-icon name="chevron-up-outline"></ion-icon>
</a>
<script src="./assets/js/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
