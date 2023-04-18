<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/rica/html/element-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Apr 2023 05:36:49 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="rica">
    <meta name="keywords" content="rica">
    <meta name="author" content="rica">
    <link rel="icon" href="{{URL::asset('assets/frontend/images/favicon.png')}}" type="image/x-icon" />
    <title>Rica</title>

    <!--Google font-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Vampiro+One&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/frontend/css/font-awesome.css')}}">

    <!-- Animation -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/frontend/css/animate.css')}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/frontend/css/themify-icons.css')}}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/frontend/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/frontend/css/slick-theme.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/frontend/css/bootstrap.css')}}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/frontend/css/color1.css')}}">

</head>

<body>


<!-- header start -->
<header class="inner-page">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="menu">
                    <div class="brand-logo">
                        <a href="{{route('home')}}">
                            <img src="{{URL::asset('assets/frontend/images/icon/footer-logo.png')}}" alt=""
                                 class="img-fluid blur-up lazyload">
                        </a>
                    </div>
                    <nav>
                        <div class="main-navbar">
                            <div id="mainnav">
                                <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                <div class="menu-overlay"></div>
                                <ul class="nav-menu">
                                    <li class="back-btn">
                                        <div class="mobile-back text-end">
                                            <span>Back</span>
                                            <i aria-hidden="true" class="fa fa-angle-right ps-2"></i>
                                        </div>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('list.flight')}}" class="nav-link menu-title">Danh Sách Chuyến Bay</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('list.pilot')}}" class="nav-link menu-title">Danh Sách Các Phi Công</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('list.aircraft')}}" class="nav-link menu-title">Danh Sách Các Phi Cơ</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('list.certification')}}" class="nav-link menu-title">Thông Tin Chứng Nhận</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--  header end -->


<!-- breadcrumb start -->
<section class="breadcrumb-section pt-0">
    <img src="assets/frontend/images/inner-bg.jpg" class="bg-img img-fluid blur-up lazyload" alt="">
    <div class="breadcrumb-content">
        <div>
            <h2>Danh Sách Các Phi Công</h2>
            <nav aria-label="breadcrumb" class="theme-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('list.pilot')}}">Xem Danh Sách Toàn Bộ Phi Công Tại Đây</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="title-breadcrumb">Rica</div>
</section>
<!-- breadcrumb end -->

<!-- category 2 start -->
<section class="category-sec ratio3_2 section-b-space">
    <div class="container">
        <div class="title-1 title-5">
            <span class="title-label">Phi Công</span>
            <h2>Danh Sách Phi Công</h2>
        </div>
        <div class="row">
            <div class="col">
                <div class="slide-3 arrow-classic">
                    @foreach($list_pilot as $value)
                        <a href="#">
                            <div class="category-box wow fadeInUp">
                                <div class="img-category">
                                    <div class="side-effect"></div>
                                    <div>
                                        <img src="https://plus.unsplash.com/premium_photo-1661776119929-416f3724e711?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt=""
                                             class="img-fluid blur-up lazyload bg-img">
                                    </div>
                                    <div class="top-bar">
                                        <span class="offer">$</span>
                                        <h5>{{number_format($value->luong)}}</h5>
                                    </div>
                                    <div class="like-cls">
                                        <i class="fas fa-heart"><span class="effect"></span></i>
                                    </div>
                                </div>
                                <div class="content-category">
                                    <div class="top">
                                        <h3>{{$value->ten_phi_cong}}</h3>
                                    </div>
                                    <h6><span>{{$value->ma_phi_cong}}</span></h6>
                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!-- category 2 end -->

<!-- footer start -->
<footer>
    <div class="footer section-b-space section-t-space">
        <div class="container">
            <div class="row order-row">
                <div class="col-xl-2 col-md-6 order-cls">
                    <div class="footer-title mobile-title">
                        <h5>Liên Hệ Ngay</h5>
                    </div>
                    <div class="footer-content">
                        <div class="contact-detail">
                            <div class="footer-logo">
                                <img src="assets/frontend/images/icon/footer-logo.png" alt=""
                                     class="img-fluid blur-up lazyload">
                            </div>
                            <p>Chuyến Bay Niềm Tin</p>
                            <ul class="contact-list">
                                <li><i class="fas fa-map-marker-alt"></i> A-32, Albany, Newyork.</li>
                                <li><i class="fas fa-phone-alt"></i> 518 - 457 - 5181</li>
                                <li><i class="fas fa-envelope"></i> contact@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3">
                    <div class="footer-space">
                        <div class="footer-title">
                            <h5>about</h5>
                        </div>
                        <div class="footer-content">
                            <div class="footer-links">
                                <ul>
                                    <li><a href="#">about us</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">login</a></li>
                                    <li><a href="#">register</a></li>
                                    <li><a href="#">terms & co.</a></li>
                                    <li><a href="#">privacy</a></li>
                                    <li><a href="#">support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="footer-title">
                        <h5>top places</h5>
                    </div>
                    <div class="footer-content">
                        <div class="footer-place">
                            <div class="row">
                                <div class="col-4">
                                    <div class="place">
                                        <a href="#">
                                            <img src="assets/frontend/images/tour/footer/1.jpg"
                                                 class="img-fluid blur-up lazyload" alt="">
                                            <div class="overlay">
                                                <h6>japan</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="place">
                                        <a href="#">
                                            <img src="assets/frontend/images/tour/footer/2.jpg"
                                                 class="img-fluid blur-up lazyload" alt="">
                                            <div class="overlay">
                                                <h6>beach</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="place">
                                        <a href="#">
                                            <img src="assets/frontend/images/tour/footer/3.jpg"
                                                 class="img-fluid blur-up lazyload" alt="">
                                            <div class="overlay">
                                                <h6>newyork</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="place">
                                        <a href="#">
                                            <img src="assets/frontend/images/tour/footer/4.jpg"
                                                 class="img-fluid blur-up lazyload" alt="">
                                            <div class="overlay">
                                                <h6>city</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="place">
                                        <a href="#">
                                            <img src="assets/frontend/images/tour/footer/5.jpg"
                                                 class="img-fluid blur-up lazyload" alt="">
                                            <div class="overlay">
                                                <h6>mountain</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="place">
                                        <a href="#">
                                            <img src="assets/frontend/images/tour/footer/6.jpg"
                                                 class="img-fluid blur-up lazyload" alt="">
                                            <div class="overlay">
                                                <h6>wild</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 order-cls">
                    <div class="footer-space">
                        <div class="footer-title">
                            <h5>useful links</h5>
                        </div>
                        <div class="footer-content">
                            <div class="footer-links">
                                <ul>
                                    <li><a href="#">home</a></li>
                                    <li><a href="#">our vehical</a></li>
                                    <li><a href="#">latest video</a></li>
                                    <li><a href="#">services</a></li>
                                    <li><a href="#">booking deal</a></li>
                                    <li><a href="#">emergency call</a></li>
                                    <li><a href="#">mobile app</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="footer-title">
                        <h5>new topics</h5>
                    </div>
                    <div class="footer-content">
                        <div class="footer-blog">
                            <div class="media">
                                <div class="img-part">
                                    <a href="#"><img src="assets/frontend/images/cab/blog-footer/1.jpg"
                                                     class="img-fluid blur-up lazyload" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h5>recent news</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="img-part">
                                    <a href="#"><img src="assets/frontend/images/cab/blog-footer/2.jpg"
                                                     class="img-fluid blur-up lazyload" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h5>recent news</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row ">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="footer-social">
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="copy-right">
                        <p>copyright 2023 PHS by - Phan Hoang Son</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->


<!-- tap to top -->
<div class="tap-top">
    <div>
        <i class="fas fa-angle-up"></i>
    </div>
</div>
<!-- tap to top end -->

<!-- latest jquery-->
<script src="{{URL::asset('assets/frontend/js/jquery-3.5.1.min.js')}}"></script>

<!-- slick js-->
<script src="{{URL::asset('assets/frontend/js/slick.js')}}"></script>

<!-- wow js-->
<script src="{{URL::asset('assets/frontend/js/wow.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{URL::asset('assets/frontend/js/bootstrap.bundle.min.js')}}"></script>

<!-- lazyload js-->
<script src="{{URL::asset('assets/frontend/js/lazysizes.min.js')}}"></script>

<!-- Theme js-->
<script src="{{URL::asset('assets/frontend/js/script.js')}}"></script>

<script>
    new WOW().init();
</script>

</body>

</html>
