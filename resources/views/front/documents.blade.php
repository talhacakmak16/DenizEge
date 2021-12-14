@extends('layouts.master')
@section('title')
    Belgeler
@endsection()

@section('content')

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
                        <p>Resmi Evraklarımız ve Sözleşmelerimiz</p>
                        <h1>Belgelerimiz</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    <div class="product-section mt-150 mb-150">
        <div class="container">


            <div class="row product-lists">

                    <div class="col-lg-4 col-md-6 text-center strawberry">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img src={{asset('assets/images/evrak.png')}} alt=""></a>
                            </div>
                            <h3>Evrak</h3>

                            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i>Devamını Oku</a>
                        </div>
                    </div>
                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src={{asset('assets/images/lisans.png')}} alt=""></a>
                        </div>
                        <h3>Atık Lisansı</h3>

                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i>Devamını Oku</a>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="pagination-wrap">
                        <ul>
                            <li><a href="#">Önceki</a></li>
                            <li><a href="#">1</a></li>
                            <li><a class="active" href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Sonraki</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
