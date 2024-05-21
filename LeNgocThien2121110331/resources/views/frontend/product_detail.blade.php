@extends('layouts.site')
@section('title', 'ProductDetail')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{ asset('css/main.css ') }}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('css/prettyPhoto.css ') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('css/price-range.css ') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css ') }}">
    <main>
        <div class="container">
            <div class="row">
                

                <div class="col-sm-9 padding-right1">
                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-5">
                            <style>
                                .responsive-image {
                                    width: 250px;
                                    height: 250px;
                                    object-fit: contain;
                                }
                            </style>
                            
                            <img src="{{ asset('images/product-details/iphone-15-pro-max-white-1-3.jpg') }}" alt="" class="responsive-image" />

                            <div id="similar-product" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <a href=""><img src="images/product-details/similar1.jpg"
                                                alt=""></a>
                                        <a href=""><img src="images/product-details/similar2.jpg"
                                                alt=""></a>
                                        <a href=""><img src="images/product-details/similar3.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="item">
                                        <a href=""><img src="images/product-details/similar1.jpg"
                                                alt=""></a>
                                        <a href=""><img src="images/product-details/similar2.jpg"
                                                alt=""></a>
                                        <a href=""><img src="images/product-details/similar3.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="item">
                                        <a href=""><img src="images/product-details/similar1.jpg"
                                                alt=""></a>
                                        <a href=""><img src="images/product-details/similar2.jpg"
                                                alt=""></a>
                                        <a href=""><img src="images/product-details/similar3.jpg"
                                                alt=""></a>
                                    </div>

                                </div>

                                <!-- Controls -->
                               
                            </div>

                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <h2>sản phẩm 1</h2>
                                <span>
                                    <span>1$</span>
                                    <label>Quantity:</label>
                                    <input type="text" value="10" />
                                    <button type="button" class="btn btn-fefault cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Thêm vào giỏ hàng
                                    </button>
                                </span>
                                
                                <p><b>Brand:</b> Brand 1</p>
                                <a href=""><img src="images/product-details/share.png"
                                        class="share img-responsive" alt="" /></a>
                            </div><!--/product-information-->
                        </div>
                    </div><!--/product-details-->

                    


                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.js ') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js ') }}"></script>
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('js/contact.js') }}"></script>
    <!-- Font Awesome -->
    <script src="{{ asset('js/gmaps.js') }}"></script>
    <!-- Fancybox -->
    <!-- Themify Icons -->
    <script src="{{ asset('js/html5shiv.js ') }}"></script>
    <!-- Nice Select CSS -->
    <script src="{{ asset('js/main.js ') }}"></script>
    <script src="{{ asset('js/price-range.js') }}"></script>

@endsection
