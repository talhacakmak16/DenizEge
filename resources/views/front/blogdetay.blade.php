@extends('layouts.master')
@section('title')
    Detay Sayfa
@endsection
@section('content')

    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Yazının Devamı</p>
                        <h1>{{$data[0]['title']}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- single article section -->
    <div class="mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-article-section">
                        <div class="single-article-text">
                            <img style="width: 700px;height: 350px;" src="{{asset($data[0]['image'])}}">
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> {{$data[0]['owner']}}</span>
                                <span class="date"><i class="fas fa-calendar"></i> {{$data[0]['date']}}</span>
                            </p>
                            <h2>{{$data[0]['title']}}</h2>
                           <p>{{$data[0]['content']}}</p>
                        </div>


                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-section">
                        <div class="recent-posts">
                            <h4>Benzer Yazılar</h4>
                            <ul>
                                @foreach(\App\Models\Blog::paginate(5) as $key => $value)
                                <li><a href="single-news.html">{{$value['title']}}</a></li>
                                @endforeach
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end single article section -->

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
