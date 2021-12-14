@extends('layouts.master')
@section('title')
    İletişim
@endsection
@section('content')


    <!-- end header -->

    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Şunun için Ara:</h3>
                            <input type="text" placeholder="Anahtar Kelime">
                            <button type="submit">Ara... <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search arewa -->

    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>7/24 Bize Ulaşın</p>
                        <h1>İletişim</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- contact form -->
    <div class="contact-from-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="form-title">
                        <h2>Bize Bir Sorun Var mı ?</h2>
                    <p>Bize Ulaşmak için Aşağıdaki Formu Doldur , Mesajını Yolla ve Sana Hemen Dönüş Yapalım</p>
                    </div>
                    <div id="form_status"></div>
                    <div class="contact-form">
                        <form enctype="multipart/form-data" id="fruitkha-contact" action="{{route('contact.post')}}" method="POST" >
                            {{csrf_field()}}
                            <p>
                                <input type="text" placeholder="İsim" name="name" id="name">
                                <input type="email" placeholder="Email" name="email" id="email">
                            </p>
                            <p>
                                <input type="tel" placeholder="Telefon" name="phone" id="phone">
                                <input type="text" placeholder="Konu" name="subject" id="subject">
                            </p>
                            <p><textarea name="message" id="message" cols="30" rows="10" placeholder="Mesajın"></textarea></p>

                            <p><input type="submit" value="Gönder"></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-form-wrap">
                        <div class="contact-form-box">
                            <h4><i class="fas fa-map"></i> İş yeri Adresimiz</h4>
                            <p>Boğazköy  İstiklal Mah. <br> İsmet İnönü Cad. No:58/1 Arnavutköy İstanbul</p>
                        </div>
                        <div class="contact-form-box">
                            <h4><i class="far fa-clock"></i> Çalışma Saatlerimiz</h4>
                            <p>Pazartesi - Cuma : 8:00 . 19:00 <br> Cumaretsi: 8:00 to 19:00 </p>
                        </div>
                        <div class="contact-form-box">
                            <h4><i class="fas fa-address-book"></i> İletişim</h4>
                            <p>Tel : (+90) 05367153434 <br> Email: denizege3416@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact form -->

    <!-- find our location -->
    <div class="find-location blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p> <i class="fas fa-map-marker-alt"></i> Konumumuzu Bul</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end find our location -->

    <!-- google map section -->
    <div class="embed-responsive embed-responsive-21by9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3002.4000314551754!2d28.767701915419703!3d41.19125147928263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3e5e067de857892c!2zNDHCsDExJzI4LjUiTiAyOMKwNDYnMTEuNiJF!5e0!3m2!1str!2str!4v1639415065451!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>    </div>
    <!-- end google map section -->




@endsection
