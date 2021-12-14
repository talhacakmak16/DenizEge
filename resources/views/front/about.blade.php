@extends('layouts.master')
@section('title')
    Hakkımızda
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
                            <h3>Search For:</h3>
                            <input type="text" placeholder="Keywords">
                            <button type="submit">Search <i class="fas fa-search"></i></button>
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
                        <p>Ne Öğrenmek İstiyorsan burada</p>
                        <h1>Hakkımızda</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- featured section -->
    <div class="feature-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="featured-text">
                        <h2 class="pb-3">Ne İş <span class="orange-text">Yapıyoruz ?</span></h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-4 mb-md-5">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-shipping-fast"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Gıda Dönüşümü</h3>
                                        <p>Gıda fabrikalarından , restorantlardan çıkan atıklar hammadde olarak kullanılmaktadır.<br>Örneğin Ekmek , Çikolata , Gofret Kuruyemiş ve Nişasta gibi bir çok ürünü toplayıp işliyoruz ve yem fabrikalarına hammadde sağlıyoruz </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-money-bill-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h3>En Uygun Teklif</h3>
                                        <p>Türkiye'nin Her yerinden atık gıdalarınızı en uygun fiyata sizden alıyoruz.</p><br><p>Fiyat İçin <a href={{route('contact')}}>İletişime</a> Geçiniz</p>

                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- end featured section -->

    <!-- shop banner -->

    <div class="mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-article-section">
                        <div class="single-article-text">
                            <img style="width: 700px;height: 350px;" src="{{asset('assets/images/wheat.jpg')}}">
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Gegida}</span>
                                <span class="date"><i class="fas fa-calendar"></i> 24.12.2021</span>
                            </p>
                            <h2>NEDEN DENİZEGE</h2>
                            <p>
                                Kullanılma süresi dolan ve yaşadığımız ortamdan uzaklaştırılması gereken maddeler ATIK olarak tanımlanır. Dünyada üretilen gıdaların yüzde 30-40’ı çöpe gidiyor. Gıda geri kazanım hiyerarşisi şöyle diyor; önce atığı kaynağında önleyin. Kaynağında önleyemiyorsanız tarlada ya da mağazada; doğru satın alma yapın, indirimli satın ve bir şekilde tüketin. Yapamadıysanız insana bağışlayın; bunu başaramıyorsanız hayvana bağışlayın. DENİZEGE Gıda olarak bizde ….. tarihinden bu yana bunu yapıyoruz. Evlerinizde veya işyerlerinizde ihtiyaç fazlası olarak bulunan ve tüketilemeden kullanım tarihi geçmiş geri dönüşümü yapılabilen sıvı olmayan atıkların mevzuat ve yönetmeliklere uygun bir şekilde, hayvan yemi olarak geri dönüşümünü sağlıyoruz.  Böylelikle hem israfı, hem de çevre kirliliğinin önlenmesine katkıda bulunuyoruz.</p>

                                <h2>GERİ DÖNÜŞÜMÜNÜ SAĞLADIĞIMIZ ATIK ÜRÜNLER (Hem Doğa Hem Siz Kazanında Kullanılabilir)</h2>
                                Yaşamımızı idame ettirmek için yemek zorunda olduğumuz hemen hemen her şeyin (İnsan olarak işlenmeden veya işlense dahi tüketemediğimiz atıklar (Hurma çekirdeği, Fındık Kabuğu vb gibi) dahil), geri dönüşümü olmaktadır. Çöp olarak gördüğünüz atık ürünleri bize getirerek hem kendiniz kazanırsınız, hem doğa. Böylelikle israfın önüne geçer, çevre kirliliğinin önlenmesinde katkınız olur.
                                Örneğin;<br>
                                 <br>- EKMEK ve Hamur Ürünleri (Geri dönüşümde hayvan yeminin ana maddesi)
                            <br>- Tahıl Tozu
                            <br>- Küspe (Pancar, Mısır)
                            <br>- Keçi Boynuzu Kırığı
                            <br>- Mısır Koçanı
                            <br>- Hurma Çekirdeği
                            <br>- Tatlı Yapımında Kullanılan Malzemeler, ve Tatlılar (Şeker, Vanilya, Kakao, vb.) bu ürünlerden bazılarıdır.
                            s
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- end shop banner -->


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
