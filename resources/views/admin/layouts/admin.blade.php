<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href={{asset('assets/admin/img/apple-icon.png')}}>
    <link rel="icon" href={{asset('assets/admin/img/favicon.png')}}>
    <title>
        @yield('title')
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href={{asset('assets/admin/css/material-dashboard.css?v=2.0.0')}}>
    @yield('css')
    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href={{asset('assets/admin/assets-for-demo/demo.css')}} rel="stylesheet" />
    <!-- iframe removal -->
</head>
<body>


<div class="wrapper">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
        <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                Creative Tim
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item active ">
                    <a class="nav-link" href={{route('admin.blog.index')}}>
                        <i class="material-icons">dashboard</i>
                        <p>Admin Panel</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href={{route('admin.blog.index')}}>
                        <i class="material-icons">person</i>
                        <p>Blog Yazıları</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href={{route('admin.product.index')}}>
                        <i class="material-icons">content_paste</i>
                        <p>Ürünler</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href={{route('admin.blog.index')}}>
                        <i class="material-icons">library_books</i>
                        <p>Paragraflar</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href={{route('admin.blog.index')}}>
                        <i class="material-icons">bubble_chart</i>
                        <p>Fotoğraflar</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href={{route('admin.blog.index')}}>
                        <i class="material-icons">location_ons</i>
                        <p>Konum</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href={{route('admin.contact.index')}}>
                        <i class="material-icons">notifications</i>
                        <p>Bildirimler</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->

        <!-- End Navbar -->
        @yield('content')

        <footer class="footer ">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Ekibimiz
                            </a>
                        </li>
                        <li>
                            <a href={{route('about')}}>
                                Hakkımzda
                            </a>
                        </li>
                        <li>
                            <a href={{route('blog')}}>
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href={{route('contact')}}>
                                İletişim
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, made with love by
                </div>
            </div>
        </footer>
    </div>
</div>

</body>
<script src={{asset('assets/admin/js/core/jquery.min.js')}}></script>
<script src={{asset('assets/admin/js/core/popper.min.js')}}></script>
<script src={{asset('assets/admin/js/bootstrap-material-design.js')}}></script>
<script src={{asset('assets/admin/js/plugins/perfect-scrollbar.jquery.min.js')}}></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src={{asset('assets/admin/js/plugins/chartist.min.js')}}></script>
<!-- Library for adding dinamically elements -->
<script src={{asset('assets/admin/js/plugins/arrive.min.js')}}></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src={{asset('assets/admin/js/plugins/bootstrap-notify.js')}}></script>
<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
<script src={{asset('assets/admin/js/material-dashboard.js?v=2.0.0')}}></script>
<!-- demo init -->
<script src={{asset('assets/admin/js/plugins/demo.js')}}></script>
@yield('script')
<script type="text/javascript">
    $(document).ready(function() {

        //init wizard

        // demo.initMaterialWizard();

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initCharts();

    });
</script>
</html>
<!--
