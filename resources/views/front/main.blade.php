@extends('layouts.master')
@section('title')
    Anasayfa
@endsection
@section('content')
    <div class="hero-area hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Uygun & Güvenilir</p>
                            <h1>Geri Dönüştürülebilir Her Şey</h1>
                            <div class="hero-btns">
                                <a href={{route('shop')}} class="boxed-btn">Ürünler</a>
                                <a href={{route('contact')}} class="bordered-btn">İletişime Geç</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <div class="product-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Kullanılabilir</span> Ürünler</h3>
                        <p>Geri Dönüşüme Kazandırabildiğimiz , Faydalı olabileceğimiz Ürünler</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src={{asset('assets/img/products/product-img-1.jpg')}} alt=""></a>
                        </div>
                        <h3>Çilek</h3>
                        <p class="product-price"><span> 1 Kg</span> 85 ₺ </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src={{asset('assets/img/products/product-img-2.jpg')}} alt=""></a>
                        </div>
                        <h3>Böğürtlen</h3>
                        <p class="product-price"><span>1 Kg</span> 70₺ </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src={{asset('assets/img/products/product-img-3.jpg')}} alt=""></a>
                        </div>
                        <h3>Limon</h3>
                        <p class="product-price"><span>1 Kg</span> 35₺ </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="cart-banner pt-100 pb-100">
        <div class="container">
            <div class="row clearfix">
                <!--Image Column-->
                <div class="image-column col-lg-6">
                    <div class="image">
                        <img src="{{asset('assets/img/gerijpg.jpeg')}}">
                        <div class="price-box">
                            <div class="inner-price">
                                <span class="price">
                                    <strong>30%</strong> <br> Her üründe
                                </span>
                            </div>
                        </div>
                        <img src={{asset('assets/img/a.jpg')}} alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
                    <h3><span class="orange-text">Bu Ayın</span> En İyi Teklifi </h3>
                    <h4>Gegıda</h4>
                    <div class="text">Quisquam minus maiores repudiandae nobis, minima saepe id, fugit ullam similique! Beatae, minima quisquam molestias facere ea. Perspiciatis unde omnis iste natus error sit voluptatem accusant</div>
                    <!--Countdown Timer-->
                    <div class="time-counter"><div class="time-countdown clearfix"><div class="counter-column"><div class="inner"><span class="count">10</span>Gün</div></div> <div class="counter-column"><div class="inner"><span class="count">43</span>Saat</div></div>  <div class="counter-column"><div class="inner"><span class="count">36</span>Dakika</div></div>  <div class="counter-column"><div class="inner"><span class="count">30</span>Secs</div></div></div></div>
                    <a href="{{route('contact')}}" class="cart-btn mt-3"><i class="fas fa-phone"></i> Bize Ulaşın</a>
                </div>
            </div>
        </div>
    </section>
@endsection
