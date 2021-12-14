@extends('layouts.master')
@section('title')
    Belgeler
@endsection
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
    <div class="product-section mt-150 mb-150">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Atık Toplama </span> İzin Belgemiz</h3>
                    <p></p>
                </div>
            </div>
        </div>
    <div class="row product-lists">


        <div class="item col-sm-6 col-md-4 mb-3">
            <div class="single-product-item" style="margin-left: 25px;">
              <a href="{{asset('assets/images/evrak.png')}}" class="fancybox" data-fancybox="gallery1">
                <img src="{{asset('/assets/images/evrak.png')}}" width="100%" height="100%">
              </a>
            </div>
        </div>

        <div class="item col-sm-6 col-md-4 mb-3">
            <div class="single-product-item" style="margin-left: 25px;">
                <a href="{{asset('assets/images/evrak2.png')}}" class="fancybox"  data-fancybox="gallery1">
                    <img src="{{asset('/assets/images/evrak2.png')}}" width="100%" height="100%">
                </a>
            </div>
        </div>

        <div class="item col-sm-6 col-md-4 mb-3">
            <div class="single-product-item" style="margin-left: 25px;">
                <a href="{{asset('assets/images/evrak3.png')}}" class="fancybox" data-fancybox="gallery1">
                    <img src="{{asset('/assets/images/evrak3.png')}}" width="100%" height="100%">
                </a>
            </div>
        </div>
    </div>


    </div>

</div>

@endsection
