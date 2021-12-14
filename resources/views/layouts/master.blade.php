<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>@yield('title')</title>
    <!-- LightBox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href={{asset('assets/img/favicon.png')}}>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href={{asset('assets/css/all.min.css')}}>
    <!-- bootstrap -->
    <link rel="stylesheet" href={{asset('assets/bootstrap/css/bootstrap.min.css')}}>
    <!-- owl carousel -->
    <link rel="stylesheet" href={{asset('assets/css/owl.carousel.css')}}>
    <!-- magnific popup -->
    <link rel="stylesheet" href={{asset('assets/css/magnific-popup.css')}}>
    <!-- animate css -->
    <link rel="stylesheet" href={{asset('assets/css/animate.css')}}>
    <!-- mean menu css -->
    <link rel="stylesheet" href={{asset('assets/css/meanmenu.min.css')}}>
    <!-- main style -->
    <link rel="stylesheet" href={{asset('assets/css/main.css')}}>
    <!-- responsive -->
    <link rel="stylesheet" href={{asset('assets/css/responsive.css')}}>
    <!-- documents -->


    @yield('css')

</head>
<body>
<div class="loader">
    <div class="loader-inner">
        <div class="circle"></div>
    </div>
</div>
<div class="top-header-area" id="sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="main-menu-wrap">
                    <!-- logo -->
                    <div class="site-logo">
                        <a href={{route('main')}}>
                          <img   src="{{asset('assets/images/denizegelogo3.png')}}">
                        </a>
                    </div>
                    <!-- logo -->

                    <!-- menu start -->
                    <nav class="main-menu">
                        <ul>
                            <li class="current-list-item"><a href={{route('main')}}>Anasayfa</a>

                            </li>
                            <li><a href={{route('about')}}>Hakkımızda</a></li>
                            <li><a href={{route('doc')}}>Belgeler</a></li>

                            <li><a href={{route('contact')}}>İletişim</a></li>

                            </li>
                            <li>
                                <div class="header-icons">

                                    <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                    <div class="mobile-menu"></div>
                    <!-- menu end -->
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
                </div>
            </div>
        </div>
    </div>
</div>
@yield('content')

<!-- footer -->
<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer-box about-widget">
                    <h2 class="widget-title">Biz Kimiz ?</h2>
         <p>Gıda fabrikalarından , restorantlardan çıkan atıklar hammadde olarak kullanılmaktadır.
             Örneğin Ekmek , Çikolata , Gofret Kuruyemiş ve Nişasta gibi bir çok ürünü toplayıp işliyoruz ve yem fabrikalarına hammadde sağlıyoruz</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-box get-in-touch">
                    <h2 class="widget-title">Neredeyiz ?</h2>
                    <ul>



                        <li> Boğazköy İstiklal Mah.
                            İsmet İnönü Cad. No:58/1 Arnavutköy İstanbul</li>
                        <li>denizege3416@gmail.com</li>
                        <li>+90 536 715 3434</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-box pages">
                    <h2 class="widget-title">Sayfalar</h2>
                    <ul>
                        <li><a href={{route('main')}}>Anasayfa</a></li>
                        <li><a href={{route('about')}}>Hakkımızda</a></li>
                        <li><a href={{route('contact')}}>İletişim</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6"style="text-align: center;margin-top: 50px;">

                    <a href={{route('main')}}>
                        <img style="max-width: 250px;"  src="{{asset('assets/images/sifiratik.png')}}">
                    </a>

            </div>
            <div class="col-lg-6 col-md-6"style="text-align: center;margin-top: 50px;">

                    <a href={{route('main')}}>
                        <img  style="max-width: 300px;"  src="{{asset('assets/images/denizegelogo3.png')}}">
                    </a>

            </div>
        </div>
    </div>
</div>
<!-- end footer -->
<!-- copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <p>Copyrights &copy; 2021 - <a href="https://.com/">Gegıda</a>,  Tüm Hakları Alınmıştır.</p>
            </div>
            <div class="col-lg-6 text-right col-md-12">
                <div class="social-icons">
                    <ul>
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end copyright -->
<script src={{asset('assets/js/jquery-1.11.3.min.js')}}></script>
<!-- bootstrap -->
<script src={{asset('assets/bootstrap/js/bootstrap.min.js')}}></script>
<!-- count down -->
<script src={{asset('assets/js/jquery.countdown.js')}}></script>
<!-- isotope -->
<script src={{asset('assets/js/jquery.isotope-3.0.6.min.js')}}></script>
@yield('script')
<!-- waypoints -->
<script src={{asset('assets/js/waypoints.js')}}></script>
<!-- owl carousel -->
<script src={{asset('assets/js/owl.carousel.min.js')}}></script>
<!-- magnific popup -->
<script src={{asset('assets/js/jquery.magnific-popup.min.js')}}></script>
<!-- mean menu -->
<script src={{asset('assets/js/jquery.meanmenu.min.js')}}></script>
<!-- sticker js -->
<script src={{asset('assets/js/sticker.js')}}></script>
<!-- main js -->
<script src={{asset('assets/js/main.js')}}></script>
<!-- documents -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
