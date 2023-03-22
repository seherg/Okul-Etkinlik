@extends("layouts.layout")
@section("main")


<main>
    <article>

        <!--
    - #HERO
  -->

        <section class="section hero"
                 style="background-image: url('./assets/images/hero-bg-bottom.png')">
            <div class="container">

                <div class="hero-content">

                    <p class="section-subtitle">Keşfedin</p>

                    <h2 class="hero-title">Gezilecek çok yer var</h2>

                    <p class="hero-text">
                        I travel not to go anywhere, but to go. I travel for travel's sake the great affair is to
                        move.
                    </p>

                    <div class="btn-group">
                        <a href="/etkinlik" class="btn btn-primary">Etkinlikler</a>
                    </div>

                </div>

                <figure class="hero-banner">
                    <img src="image\istockphoto-1329031407-612x612.jpg" width="1372" height="1624" loading="lazy"
                         alt="hero banner" class="w-100">
                </figure>

            </div>
        </section>

        <!--
    - #DESTINATION
  -->

        <section class="section destination">
            <div class="container">

                <p class="section-subtitle">Keşfet</p>

                <h2 class="h2 section-title">Etkinliğini Seç</h2>

                <ul class="destination-list">
                @if(count($ilan)>0)
                    <li class="w-50">
                        <a href="#" class="destination-card">
                            <img src="image/{{$ilan[0]['etkinlik_resmi']}}" width="1140" height="1100"
                                 alt="Malé, Diyarbakır" class="img-cover">


                            <div class="card-content">
                                <!--<p class="card-subtitle"></p> -->

                                <h3 class="h3 card-title">{{$ilan[0]['etkinlik_ad']}}</h3>
                            </div>
                        </a>
                    </li>

                    <li class="w-50">
                        <a href="#" class="destination-card">
                            <img src="image/{{$ilan[1]['etkinlik_resmi']}}" width="1140" height="1100" loading="lazy"
                                 alt="Bangkok, Elazığ" class="img-cover">

                            <div class="card-content">
                                <!--<p class="card-subtitle">Elazığ</p>-->

                                <h3 class="h3 card-title">{{$ilan[1]['etkinlik_ad']}}</h3>
                            </div>

                        </a>
                    </li>
                    @endif
                    <!--
                    <li>
                        <a href="#" class="destination-card">

                            <img src="image\pertek-feribot-9.jpg" width="1110" height="480" loading="lazy"
                                 alt="Tunceli, Feribot" class="img-cover">

                            <div class="card-content">
                                <p class="card-subtitle">Tunceli</p>

                                <h3 class="h3 card-title">Feribot Pertek</h3>
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#" class="destination-card">

                            <img src="image\circir-selalesi.jpg" width="1110" height="480" loading="lazy"
                                 alt="elazig, circir-selalesi" class="img-cover">

                            <div class="card-content">
                                <p class="card-subtitle">Elazığ</p>

                                <h3 class="h3 card-title">Çırçır Şelalesi</h3>
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#" class="destination-card">
                            <img src="image\orduzu-pinarbasi.jpg" width="1110" height="480" loading="lazy"
                                 alt="malatya, orduzu" class="img-cover">

                            <div class="card-content">
                                <p class="card-subtitle">Malatya</p>

                                <h3 class="h3 card-title">Orduzu</h3>
                            </div>

                        </a>
                    </li>
                    -->

                </ul>

            </div>
        </section>

        <!--
    - #ABOUT
  -->

        <section class="section about">
            <div class="container">

                <div class="about-content">

                    <p class="section-subtitle">Hakkımızda</p>

                    <h2 class="h2 section-title">Derslere Ara Verme Zamanı</h2>

                    <p class="about-text">
                        Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                        humour, or
                        randomised words
                        which don't look even slightly believable.
                    </p>

                    <ul class="about-list">

                        <li class="about-item">

                            <div class="about-item-icon">
                                <ion-icon name="compass"></ion-icon>
                            </div>

                            <div class="about-item-content">
                                <h3 class="h3 about-item-title">Mevcut Turlar</h3>

                                <p class="about-item-text">
                                    Lorem Ipsum available, but the majority have suffered alteration in some.
                                </p>
                            </div>

                        </li>

                        <li class="about-item">

                            <div class="about-item-icon">
                                <ion-icon name="briefcase"></ion-icon>
                            </div>

                            <div class="about-item-content">
                                <h3 class="h3 about-item-title">Çalışanlarımız</h3>

                                <p class="about-item-text">
                                    Lorem Ipsum available, but the majority have suffered alteration in some.
                                </p>
                            </div>

                        </li>

                    </ul>

                </div>

                <figure class="about-banner">
                    <img src="image\camera-5567919_960_720.jpg" width="756" height="842" loading="lazy" alt=""
                         class="w-100">
                </figure>

            </div>
        </section>

        <!--
- #FOOTER
-->
@endsection
