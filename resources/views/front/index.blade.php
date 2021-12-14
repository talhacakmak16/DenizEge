@extends('layouts.master')
@section('title')
    Gegida
@endsection
@section('content')

    <!--PreLoader Ends-->

    <!-- header -->

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
    <!-- end search area -->

    <!-- hero area -->
    <div class="hero-area hero-bg" style="background-image: url({{asset('assets/images/wheat.jpg')}})">
        <div class="container"  >
            <div class="row" >
                <div class="col-lg-9 offset-lg-2 text-center" >

                    <div class="hero-text" >
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Uygun & Güvenilir</p>
                            <h1>Geri Dönüştürülebilir Her Şey</h1>
                            <div class="hero-btns">
                                <a href={{route('doc')}} class="bordered-btn">Belgelerimiz</a>
                                <a href={{route('contact')}} class="boxed-btn">İletişime Geç</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero area -->

    <!-- features list section -->
    <div class="list-section pt-80 pb-80">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="content">
                            <h3>Hızlı Geri dönüşüm</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="content">
                            <h3>24/7 Destek</h3>
                            <p>Tüm Gün Destek Al</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="list-box d-flex justify-content-start align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-sync"></i>
                        </div>
                        <div class="content">
                            <h3>Dönüşüm ile Tasarruf</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end features list section -->

    <!-- product section -->

    <!-- end product section -->

    <!-- cart banner section -->

    <!-- end cart banner section -->

    <!-- testimonail-section -->

    <!-- end testimonail-section -->

    <!-- advertisement section -->

    <!-- end advertisement section -->

    <!-- shop banner -->
    <section class="shop-banner" style="background-image: url({{asset('assets/images/ekmek.jpg')}})">
        <div class="container">
            <h3>Hem Doğa <br> Hem Siz <span class="orange-text">Kazanın...</span></h3>
            <div class="sale-percent"><span>Geri <br> Kazanılabilir</span>10.000 <span>den fazla ürün</span></div>

        </div>
    </section>
    <!-- end shop banner -->


    <!-- end latest news -->

    <!-- logo carousel -->
    <div class="logo-carousel-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner">
                        <div class="single-logo-item">
                            <img  src={{asset('assets/images/logolar/bimbo-logo.png')}} alt="">
                        </div>
                        <div class="single-logo-item">
                            <img  src={{asset('assets/images/logolar/ihe.png')}} alt="">
                        </div>
                        <div class="single-logo-item">
                            <img  src={{asset('assets/images/logolar/beyda-logo.png')}} alt="">
                        </div>

                        <div class="single-logo-item">
                            <img  src={{asset('assets/images/logolar/embid.png')}} alt="">
                        </div>
                        <div class="single-logo-item">
                            <img  src={{asset('assets/images/logolar/ch.png')}} alt="">
                        </div>
                        <div class="single-logo-item">
                            <img  src={{asset('assets/images/logolar/simitt.png')}} alt="">
                        </div>
                        <div class="single-logo-item">
                            <img  src={{asset('assets/images/logolar/koska.png')}} alt="">
                        </div>
                        <div class="single-logo-item">
                            <img  src={{asset('assets/images/logolar/time.jpg')}} alt="">
                        </div>
                        <div class="single-logo-item">
                            <img  src={{asset('assets/images/logolar/mansur.jpg')}} alt="">
                        </div>
                        <div class="single-logo-item">
                            <img  src={{asset('assets/images/logolar/balkos.jpg')}} alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end logo carousel -->



@endsection
