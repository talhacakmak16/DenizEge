@extends('layouts.master')
@section('title')
    Blog
@endsection
@section('content')

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
                        <p>Güncel Yazılarla Sizlerleyiz</p>
                        <h1>Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- latest news -->
    <div class="latest-news mt-150 mb-150">
        <div class="container">
            <div class="row">
                @foreach(\App\Models\Blog::all()->chunk(4) as $key => $chunk)
                    @foreach($chunk as $key => $value)
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href={{route('detay',['selflink'=>$value['selflink']])}}><img src="{{asset($value['image'])}}"></a>
                        <div class="news-text-box">
                            <h3><a href="single-news.html">{{$value['title']}}</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> {{$value['owner']}}</span>
                                <i class="fas fa-calendar"></i> {{$value['date']}}</span>
                            </p>
                            <p class="excerpt">Lorem ipsum dolor sit abos inventore, beatae nam.</p>
                            <a href={{route('detay',['selflink'=>$value['selflink']])}} class="read-more-btn">devamını oku <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endforeach
            </div>

            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="pagination-wrap">
                                <ul>
                                    <li><a href="#">Önce</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a class="active" href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Sonra</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end latest news -->

    <!-- logo carousel -->
    <div class="logo-carousel-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner">
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/1.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/2.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/3.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/4.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end logo carousel -->


 @endsection
