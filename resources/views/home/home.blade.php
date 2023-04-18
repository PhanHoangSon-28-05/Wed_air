@extends('layouts.home.app')
@section('content')

    <!-- pre-loader start -->
    <div class="loader-wrapper img-gif">
        <img src="{{URL::asset('assets/frontend/images/loader.gif')}}" alt="">
    </div>
    <!-- pre-loader end -->

    <!-- header start -->
    <header class="overlay-black">
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

    <!-- home section start -->
    <section class="cab-section flight-section home-section p-0">
        <img src="assets/frontend/images/flights/sky.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
        <div class="cloud">
            <img src="assets/frontend/images/flights/cloud-real.png" alt="" class="bg-img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="flight-left h-100">
                        <img src="assets/frontend/images/flights/plane-1.png"
                             class="img-fluid blur-up lazyload plane-animation" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cab-content">
                        <div>
                            <h2>Tìm Kiếm Chuyến Bay</h2>
                            <h3>An Toàn Nhanh Chóng</h3>
                            <form class="radio-form">
                                <input id="radio-1" type="radio" name="exampleRadios" value="option1" checked>
                                <label for="radio-1" class="radio-label">Tìm Theo Địa Chỉ</label>
                            </form>
                            <form action="{{route('search.flight')}}" method="get">
                                @csrf

                                <div class="form-group">
                                    <select name="noi_xp" class="form-control open-select">
                                        <option class="title">Chọn Nơi Xuất Phát</option>
                                        @foreach($tinh_thanh as $value)
                                            <option>{{$value->tinh_thanh}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="noi_den" class="form-control open-select">
                                        <option class="title">Chọn Nơi Đến</option>
                                        @foreach($tinh_thanh as $value)
                                            <option>{{$value->tinh_thanh}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="row"></div>
                                </div>
                                <button type="submit" class="btn btn-rounded btn-sm color1 float-end">Tìm Ngay</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  home section end -->

    <!-- offer section start -->
    <section class="menu-section section-b-space">
        <div class="container">
            <div class="title-1 title-5">
                <span class="title-label">rica</span>
                <h2>Danh Sách Các Chuyến Bay</h2>
                <p>Tất Cả Các Chuyến Bay Đi Đến Các Thành Phố Lớn Tại Đây</p>
            </div>
            <div class="row">
                <div class="col">
                    <div class="slide-3 no-arrow">
                        <div>
                            <div class="menu-box">
                                <div class="top-bar">
                                    <img src="{{URL::asset('assets/frontend/images/flights/offer/3.jpg')}}" class="img-fluid blur-up lazyload"
                                         alt="">
                                    <h2>Hà Nội</h2>
                                    <div class="decorate">Hà Nội</div>
                                </div>
                                @foreach($to_hanoi as $value)
                                    <div class="bottom-bar">
                                        <div class="menu-bar">
                                            <a href="flight-top-filter.html"><img src="{{URL::asset('assets/frontend/images/flights/offer/6.jpg')}}"
                                                                                  class="img-fluid blur-up lazyload" alt=""></a>
                                            <div class="content">
                                                <h5>{{$value->ma_cb}}</h5>
                                                <a href="#">
                                                    <h5>{{$value->noi_xp}}</h5>
                                                </a>
                                                <p>Đến: {{$value->noi_den}}</p>
                                                <h6>
                                                    {{date('H:i', strtotime($value->gio_xp))}} - {{date('H:i', strtotime($value->gio_den))}}
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div>
                            <div class="menu-box">
                                <div class="top-bar">
                                    <a href="#"><img src="{{URL::asset('assets/frontend/images/flights/offer/4.jpg')}}"
                                                     class="img-fluid blur-up lazyload" alt=""></a>
                                    <h2>Đà Nẵng</h2>
                                    <div class="decorate">Đà Nẵng</div>
                                </div>
                                @foreach($to_danang as $value)
                                    <div class="bottom-bar">
                                        <div class="menu-bar">
                                            <a href="flight-top-filter.html"><img src="{{URL::asset('assets/frontend/images/flights/offer/9.jpg')}}"
                                                                                  class="img-fluid blur-up lazyload" alt=""></a>
                                            <div class="content">
                                                <h5>{{$value->ma_cb}}</h5>
                                                <a href="#">
                                                    <h5>{{$value->noi_xp}}</h5>
                                                </a>
                                                <p>Đến: {{$value->noi_den}}</p>
                                                <h6>
                                                    {{date('H:i', strtotime($value->gio_xp))}} - {{date('H:i', strtotime($value->gio_den))}}
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div>
                            <div class="menu-box">
                                <div class="top-bar">
                                    <a href="#"><img src="{{URL::asset('assets/frontend/images/flights/offer/5.jpg')}}"
                                                     class="img-fluid blur-up lazyload" alt=""></a>
                                    <h2>TP Hồ Chí Minh</h2>
                                    <div class="decorate">TP Hồ Chí Minh</div>
                                </div>
                                @foreach($to_hcm as $value)
                                    <div class="bottom-bar">
                                        <div class="menu-bar">
                                            <a href="flight-top-filter.html"><img src="{{URL::asset('assets/frontend/images/flights/offer/8.jpg')}}"
                                                                                  class="img-fluid blur-up lazyload" alt=""></a>
                                            <div class="content">
                                                <h5>{{$value->ma_cb}}</h5>
                                                <a href="#">
                                                    <h5>{{$value->noi_xp}}</h5>
                                                </a>
                                                <p>Đến: {{$value->noi_den}}</p>
                                                <h6>
                                                    {{date('H:i', strtotime($value->gio_xp))}} - {{date('H:i', strtotime($value->gio_den))}}
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div>
                            <div class="menu-box">
                                <div class="top-bar">
                                    <a href="#"><img src="assets/frontend/images/flights/offer/4.jpg"
                                                     class="img-fluid blur-up lazyload" alt=""></a>
                                    <h2>american eagle</h2>
                                    <div class="decorate">american eagle</div>
                                </div>
                                <div class="bottom-bar">
                                    <div class="menu-bar">
                                        <a href="flight-top-filter.html"><img src="assets/frontend/images/flights/offer/9.jpg"
                                                                              class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="content">
                                            <a href="#">
                                                <h5>dubai</h5>
                                            </a>
                                            <p>Dep: paris, london</p>
                                            <h6>
                                                <del>$250</del>
                                                $200
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="flight-top-filter.html"><img
                                                src="assets/frontend/images/flights/offer/10.jpg"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="content">
                                            <a href="#">
                                                <h5>new york</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6>
                                                <del>$250</del>
                                                $200
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="flight-top-filter.html"><img src="assets/frontend/images/flights/offer/6.jpg"
                                                                              class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="content">
                                            <a href="#">
                                                <h5>norway</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6>
                                                <del>$250</del>
                                                $200
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- offer section end -->
@endsection
