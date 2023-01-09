<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Swyft2eat</title>
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">

    <script>
        function addToCart(productId, vendors) {
            // alert("working");
            console.log(vendors);
            var url = '{{ route('add_to_cart', [':productId', ':vendors']) }}';
            url = url.replace(':productId', productId);
            url = url.replace(':vendors', vendors.user_id);
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
                success: function() {
                    console.log("Success");
                },
                error: function() {
                    console.log(url);
                    console.log("Failed");
                }
            });
        }
    </script>

    <link rel="stylesheet" href="{{ asset('/assets/css/icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/red-color.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/yellow-color.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}">
</head>

<body itemscope>

    <main>
        <!-- <div class="preloader">
            <div id="cooking">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>

            <div><img src="/assets/images/logo5.png"></div>
                <div id="area">
                    <div id="sides">
                        <div id="pan"></div>
                        <div id="handle"></div>
                    </div>
                    <div id="pancake">
                        <div id="pastry"></div>
                    </div>
                </div>
            </div>
        </div> -->

        <header class="stick">
            <div class="topbar">
                <div class="container">
                    @include('flash-message')
                    <!-- <div class="select-wrp">
                        <select data-placeholder="Feel Like Eating">
                            <option>FEEL LIKE EATING</option>
                            <option>Burger</option>
                            <option>Pizza</option>
                            <option>Fried Rice</option>
                            <option>Chicken Shots</option>
                        </select>
                    </div> -->
                    <!-- <div class="select-wrp">
                        <select data-placeholder="Choose Location">
                            <option>CHOOSE LOCATION</option>
                            <option>New york</option>
                            <option>Washington</option>
                            <option>Chicago</option>
                            <option>Los Angeles</option>
                        </select>
                    </div> -->
                    {{-- <div class="topbar-register">
                    <a class="ornage-bg brd-rd4" href="login" title="Register" itemprop="url">VENDOR LOGIN</a>

                        <!-- <a class="" href="login" title="Login" itemprop="url"> VENDOR LOGIN</a> -->
                    </div> --}}
                    <div class="social1">
                        <a href="#" title="Facebook" itemprop="url" target="_blank"><i
                                class="fa fa-facebook-square"></i></a>
                        <a href="#" title="Twitter" itemprop="url" target="_blank"><i
                                class="fa fa-twitter"></i></a>
                        <a href="#" title="Google Plus" itemprop="url" target="_blank"><i
                                class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div><!-- Topbar -->
            <div class="logo-menu-sec">
                <div class="container">
                    <div class="logo">
                        <h1 itemprop="headline"><a href="{{ url('/') }}"
                                src="{{ asset('assets/images/logo5.png') }}" alt="logo.png" itemprop="image"
                                style="width: 80px;"></a></h1>
                    </div>
                    <nav>
                        <div class="menu-sec">
                            <ul>
                                <li class="menu-item-has-children"><a href="{{ url('/') }}" title="home"
                                        itemprop="url"><span></span>HOME</a>
                                    <!-- <ul class="sub-dropdown">
                                        <li><a href="index-2.html" title="HOMEPAGE 1" itemprop="url">HOMEPAGE 1</a></li>
                                        <li><a href="index2.html" title="HOMEPAGE 2" itemprop="url">HOMEPAGE 2</a></li>
                                    </ul> -->
                                </li>

                                <li><a href="/#contact" title="CONTACT US" itemprop="url"> <span></span> ABOUT US</a>
                                </li>

                                <li class="menu-item-has-children"><a href="{{ url('/#rest') }}" title="RESTAURANTS"
                                        itemprop="url"><span></span>RESTAURANTS</a>
                                    <!-- <ul class="sub-dropdown">
                                        <li><a href="restaurant-found.html" title="RESTAURANT 1" itemprop="url">RESTAURANT 1</a></li>
                                        <li><a href="restaurant-found2.html" title="RESTAURANT 2" itemprop="url">RESTAURANT 2</a></li>
                                        <li><a href="restaurant-detail.html" title="RESTAURANT DETAILS" itemprop="url">RESTAURANT DETAILS</a></li>
                                        <li><a href="food-recipes.html" title="RESTAURANT DETAILS" itemprop="url">FOOD RECIPES</a></li>
                                        <li><a href="our-articles.html" title="RESTAURANT DETAILS" itemprop="url">OUR ARTICLES</a></li>
                                        <li><a href="our-menu.html" title="RESTAURANT DETAILS" itemprop="url">OUR MENU</a></li>
                                        <li><a href="our-services.html" title="RESTAURANT DETAILS" itemprop="url">OUR SERVICES</a></li>
                                    </ul> -->
                                </li>

                                <li><a href="#contact" title="CONTACT US" itemprop="url"><span></span>CONTACT US</a>
                                </li>

                                @auth

                                    <li class="menu-item-has-children"> <a href="#" itemprop="url"
                                            style="color: orange;">{{ auth()->user()->name }}</a>
                                        <ul class="sub-dropdown">
                                            <li><a href="{{ route('logout') }}">Log Out</a></li>
                                        </ul>
                                    @else
                                    </li>
                                </ul>
                                <a class="" href="{{ route('vendorLogin') }}" title="Login" itemprop="url"
                                    style="background-color: orange;">Login</a>
                            @endauth
                            {{-- @auth
                                <a class="menu-item-has-children" href="#"  itemprop="url" style="background-color: orange;">{{ auth()->user()->name }}</a>
                                <ul class="sub-dropdown">
                                    <li><a href="{{ route('logout') }}" >Log Out</a></li>
                                </ul>
                                {{-- <li class="menu-item-has-children" style="background-color: orange">{{ auth()->user()->name }}</a></li>
                                <ul class="sub-dropdown">
                                    <li><a href="restaurant-found.html" title="RESTAURANT 1" itemprop="url">Log Out</a></li>
                                    <li><a href="restaurant-found2.html" title="RESTAURANT 2" itemprop="url">Log Out</a></li>
                                </ul> --}}
                            {{-- @else --}}

                            {{-- <a class="log-popup-btn" href="#" title="Login" itemprop="url" style="background-color: orange;">Login</a>
                            @endauth --}}

                            {{-- <a class="log-popup-btn" href="#" title="Login" itemprop="url" style="background-color: orange;">{{ Auth::user() }}</a> --}}
                        </div>
                    </nav><!-- Navigation -->
                </div>
            </div><!-- Logo Menu Section -->
        </header><!-- Header -->

        <div class="responsive-header">
            <div class="responsive-topbar">
                <!-- <div class="select-wrp">
                    <select data-placeholder="Feel Like Eating">
                        <option>FEEL LIKE EATING</option>
                        <option>Burger</option>
                        <option>Pizza</option>
                        <option>Fried Rice</option>
                        <option>Chicken Shots</option>
                    </select>
                </div> -->
                <!-- <div class="select-wrp">
                    <select data-placeholder="Choose Location">
                        <option>CHOOSE LOCATION</option>
                        <option>New york</option>
                        <option>Washington</option>
                        <option>Chicago</option>
                        <option>Los Angeles</option>
                    </select>
                </div> -->
            </div>
            <div class="responsive-logomenu">
                <div class="logo">
                    <h1 itemprop="headline"><a href="/" title="Home" itemprop="url"><img
                                src="/assets/images/logo5.png" alt="logo.png" itemprop="image"></a></h1>
                </div>
                <span class="menu-btn yellow-bg brd-rd4"><i class="fa fa-align-justify"></i></span>
            </div>
            <div class="responsive-menu">
                <span class="menu-close red-bg brd-rd3"><i class="fa fa-close"></i></span>
                <div class="menu-lst">
                    <ul>
                        <li><a href="{{ url('/') }}" title="HOME" itemprop="url"> <span></span> HOME</a></li>
                        <li><a href="/#contact" title="CONTACT US" itemprop="url"> <span></span> ABOUT US</a></li>

                        <li><a href="/#rest" title="RESTAURANTS" itemprop="url"><span></span>RESTAURANTS</a>

                        </li>

                        <li><a href="/#contact" title="CONTACT US" itemprop="url"><span></span>CONTACT US</a></li>
                        @auth

                            <li class="menu-item-has-children"> <a href="#" itemprop="url"
                                    style="color: orange;">{{ auth()->user()->name }}</a>
                                <ul class="sub-dropdown">
                                    <li><a href="{{ route('logout') }}">Log Out</a></li>
                                </ul>
                            @else
                            </li>
                        </ul>
                        <div class="register-btn">
                            <a class="" href="{{ route('vendorLogin') }}" title="Login" itemprop="url"
                                style="background-color: orange;">Login</a>
                        </div>
                    @endauth
                </div>
                
                <div class="social1">
                    <a href="#" title="Facebook" itemprop="url" target="_blank"><i
                            class="fa fa-facebook-square"></i></a>
                    <a href="#" title="Twitter" itemprop="url" target="_blank"><i
                            class="fa fa-twitter"></i></a>
                    <a href="#" title="Google Plus" itemprop="url" target="_blank"><i
                            class="fa fa-google-plus"></i></a>
                </div>
                <div class="register-btn">
                </div>
            </div><!-- Responsive Menu -->
        </div><!-- Responsive Header -->

        <section>
            <div class="block">
                <div class="fixed-bg" style="background-image: url(/assets/images/topbg.jpg);"></div>
                <div class="page-title-wrapper text-center">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="page-title-inner">
                            <h1 itemprop="headline">{{ $vendors->vendor_name }}</h1>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Restaurant</a></li>
                    <li class="breadcrumb-item active">Restaurant Details</li>
                </ol>
            </div>
        </div>

        <section>

            <div class="block gray-bg top-padd30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="sec-box">
                                <div class="sec-wrapper">
                                    <div class="row">
                                        <div class="col-md-8 col-sm-12 col-lg-8">
                                            <div class="restaurant-detail-wrapper">
                                                <div class="restaurant-detail-info">
                                                    <div class="restaurant-detail-thumb">
                                                        <ul class="restaurant-detail-img-carousel">
                                                            <li><img class="brd-rd3"
                                                                    src="{{ asset('https://img.freepik.com/free-photo/fried-chicken-with-french-fries-nuggets-meal_1339-78221.jpg?w=2000') }}"
                                                                    alt="restaurant-detail-big-img1-1.jpg"
                                                                    itemprop="image"></li>
                                                        </ul>

                                                    </div>
                                                    <div class="restaurant-detail-title">
                                                        <h1 itemprop="headline">{{ $vendors->vendor_name }}</h1>
                                                        <div class="info-meta">
                                                            <!-- <span>Greater Kailash (GK) 2</span> -->
                                                            <!-- <span><a href="#" title="" itemprop="url">Bakery</a>, <a href="#" title="" itemprop="url">Cafe</a></span> -->
                                                        </div>
                                                        <div class="rating-wrapper">
                                                            <a class="gradient-brd brd-rd2" href="#"
                                                                title="" itemprop="url"><i
                                                                    class="fa fa-star"></i> Rate <i>4.0</i></a>
                                                            <div class="rate-share brd-rd5">
                                                                <div class="rating-box-wrapper">
                                                                    <span>Rate</span>
                                                                    <div class="rating-box">
                                                                        <span class="brd-rd2 clr1 on"></span>
                                                                        <span class="brd-rd2 clr2 on"></span>
                                                                        <span class="brd-rd2 clr3 on"></span>
                                                                        <span class="brd-rd2 clr4 on"></span>
                                                                        <span class="brd-rd2 clr5 on"></span>
                                                                        <span class="brd-rd2 clr6 on"></span>
                                                                        <span class="brd-rd2 clr7 off"></span>
                                                                        <span class="brd-rd2 clr8 off"></span>
                                                                        <i>4.0</i>
                                                                    </div>
                                                                </div>
                                                                {{-- <div class="share-wrapper">
                                                                    <div class="fb-share">
                                                                        <label class="switch">
                                                                            <input type="checkbox">
                                                                            <span class="switch-slider brd-rd30"></span>
                                                                        </label>
                                                                        <a class="facebook brd-rd2" href="#" title="" itemprop="url"><i class="fa fa-facebook-square"></i> Share on Facebook</a>
                                                                    </div>
                                                                    <div class="fb-share">
                                                                        <label class="switch">
                                                                            <input type="checkbox">
                                                                            <span class="switch-slider brd-rd30"></span>
                                                                        </label>
                                                                        <a class="twitter brd-rd2" href="#" title="" itemprop="url"><i class="fa fa-twitter"></i> Share on Twitter</a>
                                                                    </div>
                                                                </div> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="restaurant-detail-tabs">
                                                        <ul class="nav nav-tabs">
                                                            <li class="active"><a href="#tab1-1" data-toggle="tab"><i
                                                                        class="fa fa-cutlery"></i> Menu</a></li>
                                                            <!-- <li><a href="#tab1-2" data-toggle="tab"><i class="fa fa-picture-o"></i> Gallery</a></li> -->
                                                            <li><a href="#tab1-3" data-toggle="tab"><i
                                                                        class="fa fa-star"></i> Reviews</a></li>
                                                            {{-- <li><a href="#tab1-4" data-toggle="tab"><i class="fa fa-book"></i>Make Order</a></li> --}}
                                                            <li><a href="#tab1-5" data-toggle="tab"><i
                                                                        class="fa fa-info"></i> Restaurant Info</a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane fade in active" id="tab1-1">
                                                                <form class="search-dish"
                                                                    action="{{ route('restaurant-detail', $rest_id) }}"
                                                                    method="GET">
                                                                    <input type="text" placeholder="Search here"
                                                                        name="search">
                                                                    <button type="submit"><i
                                                                            class="fa fa-search"></i></button>
                                                                </form>

                                                                <div class="dishes-list-wrapper">
                                                                    <!-- <span class="post-rate red-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span> -->

                                                                    <ul class="dishes-list">
                                                                        @foreach ($products as $vendor)
                                                                            <li class="wow fadeInUp"
                                                                                data-wow-delay="0.1s">
                                                                                <div class="featured-restaurant-box">
                                                                                    <div
                                                                                        class="featured-restaurant-thumb">
                                                                                        <a href="#"
                                                                                            title=""
                                                                                            itemprop="url"><img
                                                                                                src="/images/product/{{ $vendor->image }}"
                                                                                                alt="{{ $vendor->product_name }}"
                                                                                                itemprop="image"></a>
                                                                                    </div>
                                                                                    <div
                                                                                        class="featured-restaurant-info">
                                                                                        {{-- <input type="hidden" value="{{$vendor->id }}">
                                                                                    <input type="hidden" value="{{$vendors}}" --}}
                                                                                        <h4 itemprop="headline"><a
                                                                                                href="#"
                                                                                                title=""
                                                                                                itemprop="url">{{ $vendor->product_name }}</a>
                                                                                        </h4>
                                                                                        {{-- <input type="text" placeholder="quantity" name="quantity"> --}}
                                                                                        <span
                                                                                            class="price">{{ $vendor->price }}</span>
                                                                                        <!-- <p itemprop="description">Lorem Ipsum is simply dummy text of the printing industry</p> -->
                                                                                        <!-- <ul class="post-meta">
                                                                                        <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                                                        <li><i class="flaticon-transport"></i> 30min</li>
                                                                                    </ul> -->
                                                                                    </div>
                                                                                    <div class="ord-btn">
                                                                                        @auth
                                                                                            <a class="brd-rd2"
                                                                                                href="{{ route('add_to_cart', [$vendor->id, $vendors]) }}"
                                                                                                title="Order Now"
                                                                                                itemprop="url"
                                                                                                style="background-color: orange;">Order
                                                                                                Now</a>
                                                                                            {{-- <a class="brd-rd2" onclick="addToCart({{$vendor->id}}, {{$vendors}})" id={{"submit". $vendor->id}} title="Order Now" itemprop="url" style="background-color: orange;">Order Now</a> --}}
                                                                                        @else
                                                                                            <a class=""
                                                                                                href="{{ route('vendorLogin') }}"
                                                                                                title="Login"
                                                                                                itemprop="url"
                                                                                                style="background-color: orange;">Order
                                                                                                Now</a>

                                                                                        @endauth
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        @endforeach

                                                                    </ul>
                                                                </div>


                                                            </div>


                                                            <div class="tab-pane fade" id="tab1-3">
                                                                <div class="customer-review-wrapper">
                                                                    <h4 class="title3" itemprop="headline"><span
                                                                            class="sudo-bottom sudo-bg-red">Customer</span>
                                                                        Reviews</h4>
                                                                    <ul class="comments-thread customer-reviews">
                                                                        @foreach ($reviews as $review)
                                                                            @if ($reviews->isEmpty())
                                                                                <p> No customer reviews found</p>
                                                                            @else
                                                                                <li>
                                                                                    <div class="comment">
                                                                                        {{-- <img class="brd-rd50" src="assets/images/resource/review-img1.jpg" alt="review-img1.jpg" itemprop="image"> --}}
                                                                                        <div class="comment-info">
                                                                                            <h4 itemprop="headline"><a
                                                                                                    href="#"
                                                                                                    title=""
                                                                                                    itemprop="url">{{ $review->name }}</a>
                                                                                            </h4>
                                                                                            <p itemprop="description">
                                                                                                {{ $review->comment }}
                                                                                            </p>

                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            @endif
                                                                        @endforeach


                                                                    </ul>
                                                                    <div class="your-review">
                                                                        <h4 class="title3" itemprop="headline"><span
                                                                                class="sudo-bottom sudo-bg-red">Write</span>
                                                                            Review Here</h4>
                                                                        <form class="review-form" method="post"
                                                                            action="{{ route('post_review') }}">
                                                                            @method('post')
                                                                            @csrf
                                                                            <textarea class="brd-rd5" name="comment"></textarea>
                                                                            <input type="hidden"
                                                                                value="{{ $vendors->id }}"
                                                                                name="vendor_id">
                                                                            <button class="brd-rd2 red-bg"
                                                                                type="submit">POST REVIEW</button>

                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="tab1-4">
                                                                <div class="book-table">
                                                                    <h4 class="title3" itemprop="headline"><span
                                                                            class="sudo-bottom sudo-bg-red">Make</span>
                                                                        Order</h4>
                                                                    <form method="post" id="instruction"
                                                                        action="{{ route('instruction') }}">
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="input-field brd-rd2"><i
                                                                                        class="fa fa-user"></i> <input
                                                                                        type="text"
                                                                                        placeholder="NAME"
                                                                                        name="name"></div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="input-field brd-rd2"><i
                                                                                        class="fa fa-phone"></i> <input
                                                                                        type="text"
                                                                                        placeholder="PHONE"
                                                                                        name="phone"></div>
                                                                            </div>

                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="input-field brd-rd2"><i
                                                                                        class="fa fa-envelope"></i>
                                                                                    <input type="email"
                                                                                        placeholder="EMAIL"
                                                                                        name="email"></div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="input-field brd-rd2"><i
                                                                                        class="fa fa-number"></i>
                                                                                    <input type="number"
                                                                                        placeholder="Quantity"
                                                                                        name="number"></div>
                                                                            </div>

                                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                <div class="textarea-field brd-rd2"><i
                                                                                        class="fa fa-pencil"></i>
                                                                                    <textarea placeholder="Your Instruction" name="instruction"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                {{-- <a href="{{ route('add_instruction') }}" class="brd-rd2 red-bg" itemprop="url"> SEND ORDER</a> --}}
                                                                                <button
                                                                                    class="brd-rd2 red-bg update-cart"
                                                                                    type="submit">Send Order</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="tab1-5">
                                                                <div class="restaurant-info-wrapper">
                                                                    <h3 class="title3" itemprop="headline"><span
                                                                            class="sudo-bottom sudo-bg-red">Contact</span>
                                                                        Us</h3>

                                                                    <ul class="restaurant-info-list">
                                                                        <li>
                                                                            <i class="fa fa-map-marker red-clr"></i>
                                                                            <strong>Address :</strong>
                                                                            <span>{{ $vendors->location }}</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-phone red-clr"></i>
                                                                            <strong>Call us</strong>
                                                                            <span>{{ $vendors->phone_no }}</span>
                                                                        </li>


                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-lg-4">
                                            <div class="order-wrapper right wow fadeIn" data-wow-delay="0.2s">
                                                <div class="order-inner gradient-brd">
                                                    <h4 itemprop="headline">Your Cart</h4>
                                                    <div class="order-list-wrapper">
                                                        <ul class="order-list-inner">
                                                            @php
                                                                $total = 0;
                                                            @endphp
                                                            @if (session('cart'))
                                                                @foreach (session('cart') as $id => $details)
                                                                    <li>
                                                                        <div class="dish-name">

                                                                            <h6 itemprop="headline">
                                                                                {{ $details['name'] }}</h6>
                                                                            {{-- <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity"   style="width: 50px;"/> --}}
                                                                            <span
                                                                                class="price">{{ $details['price'] * $details['quantity'] }}</span>
                                                                        </div>



                                                                        <div class="mor-ingredients">
                                                                            <a class="red-clr"
                                                                                href="{{ route('remove_from_cart', $details['prod_id']) }}"
                                                                                title=""
                                                                                itemprop="url">Remove</a>
                                                                        </div>
                                                                    </li>
                                                                    @php
                                                                        
                                                                        $total += $details['price'] * $details['quantity'];
                                                                    @endphp
                                                                @endforeach

                                                            @endif


                                                            {{-- @if ($orders->isEmpty())

                                                            <p> No orders placed</p>

                                                            @else

                                                            @php
                                                            $total = 0;
                                                            @endphp

                                                            @foreach ($cart as $order)

                                                            @foreach ($order->products as $product)

                                                            @for ($i = 0; $i < count($order->products); $i++)


                                                            <li>
                                                                <div class="dish-name">
                                                                    <i></i> <h6 itemprop="headline">{{$product->product_name}}</h6> <span class="price">{{$product->price}}</span>
                                                                </div>

                                                                <div class="mor-ingredients">
                                                                    <a class="red-clr" href="{{ route('remove_from_cart', $product->id) }}" title="" itemprop="url">Remove</a>
                                                                </div>
                                                            </li>
                                                            @php
                                                            $total += $product->price;
                                                            @endphp

                                                            @endfor

                                                            @endforeach
                                                            @endforeach --}}



                                                        </ul>





                                                        <ul class="order-total">
                                                            <li><span>SubTotal</span> <i>{{ $total }}</i></li>
                                                            <!-- <li><span>Delivery fee</span> <i>$70</i></li>
                                                            <li><span>Tax</span> <i>$12</i></li> -->
                                                        </ul>
                                                        <ul class="order-method brd-rd2 orange-bg">
                                                            <li><span>Total</span> <span
                                                                    class="price">{{ $total }}</span></li>
                                                            <!-- <li><span class="radio-box cash-popup-btn"><input type="radio" name="method" id="pay1-1"><label for="pay1-1"><i class="fa fa-money"></i> Cash</label></span> <span class="radio-box card-popup-btn"><input type="radio" name="method" id="pay1-2"><label for="pay1-2"><i class="fa fa-credit-card-alt"></i> Card</label></span></li> -->
                                                            <li><a class="brd-rd2" href="{{ route('checkout') }}"
                                                                    title="" itemprop="url"
                                                                    style="background-color: orange;">CONFIRM ORDER</a>
                                                            </li>
                                                        </ul>

                                                        {{-- @endif --}}
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
        </section>
        <footer>
            <div class="block top-padd80 bottom-padd80 dark-bg" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="footer-data">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget about_widget wow fadeIn" data-wow-delay="0.1s">
                                            <div class="logo">
                                                <h1 itemprop="headline"><a href="#" title="Home"
                                                        itemprop="url"><img src="/assets/images/logo5.png"
                                                            alt="logo.png" itemprop="image"></a></h1>
                                            </div>
                                            <!-- <p itemprop="description">Food Ordering is a Premium HTML Template. Best choice for your online store. Let purchase it to enjoy now</p> -->
                                            <div class="social2">
                                                <a class="brd-rd50" href="#" title="Facebook" itemprop="url"
                                                    target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a class="brd-rd50" href="#" title="Google Plus"
                                                    itemprop="url" target="_blank"><i
                                                        class="fa fa-google-plus"></i></a>
                                                <a class="brd-rd50" href="#" title="Twitter" itemprop="url"
                                                    target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a class="brd-rd50" href="#" title="Pinterest" itemprop="url"
                                                    target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget information_links wow fadeIn" data-wow-delay="0.2s">
                                            <h4 class="widget-title" itemprop="headline">About Swyft2Eat</h4>
                                            <ul>
                                                <li><a href="#" title="" itemprop="url">Our Story</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget customer_care wow fadeIn" data-wow-delay="0.3s">
                                            <h4 class="widget-title" itemprop="headline">How to join</h4>
                                            <ul>
                                                <li><a href="#" title="" itemprop="url">Vendors</a></li>
                                                <li><a href="#" title="" itemprop="url">Customers</a>
                                                </li>
                                                <li><a href="#" title="" itemprop="url">Partners</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget get_in_touch wow fadeIn" data-wow-delay="0.4s">
                                            <h4 class="widget-title" itemprop="headline">GET IN TOUCH</h4>
                                            <ul>
                                                <li><i class="fa fa-map-marker"></i> Nairobi,Kenya</li>
                                                <li><i class="fa fa-phone"></i> +254 711 281774 | +254 797 309416</li>
                                                <li><i class="fa fa-envelope"></i> <a href="#" title=""
                                                        itemprop="url">info@swyft2eat.co.ke</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Footer Data -->
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- footer -->
        <div class="bottom-bar dark-bg text-center">
            <div class="container">
                <p itemprop="description"><a target="_blank" href="">Swyft2Eat</a></p>
            </div>
        </div><!-- Bottom Bar -->


        <div class="log-popup text-center">
            <div class="sign-popup-wrapper brd-rd5">
                <div class="sign-popup-inner brd-rd5">
                    <a class="log-close-btn" href="#" title="" itemprop="url"><i
                            class="fa fa-close"></i></a>
                    <div class="sign-popup-title text-center">
                        <h4 itemprop="headline">SIGN IN</h4>
                        <img src="/assets/images/logo5.png">
                        <!-- <span>with your social network</span> -->
                    </div>
                    <!-- <div class="popup-social text-center">
                        <a class="facebook brd-rd3" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
                        <a class="google brd-rd3" href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i> Google</a>
                        <a class="twitter brd-rd3" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
                    </div>
                    <span class="popup-seprator text-center"><i class="brd-rd50">or</i></span> -->
                    <form class="sign-form">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="text" placeholder="Username" name="name">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="password" placeholder="Password" name="password">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <button class="orange-bg brd-rd3" type="submit">SIGN IN</button>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <a class="sign-popup-btn" href="#" title="Register" itemprop="url">Not a
                                    member? Sign up</a>
                                <!-- <a class="sign-btn" href="#" title="" itemprop="url">Not a member? Sign up</a> -->
                                <a class="recover-btn" href="#" title="" itemprop="url">Recover my
                                    password</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="sign-popup text-center">
            <div class="sign-popup-wrapper brd-rd5">
                <div class="sign-popup-inner brd-rd5">
                    <a class="sign-close-btn" href="#" title="" itemprop="url"><i
                            class="fa fa-close"></i></a>
                    <div class="sign-popup-title text-center">
                        <h4 itemprop="headline">SIGN UP</h4>
                        <img src="/assets/images/logo5.png">
                        <!-- <span>with your social network</span> -->
                    </div>
                    <!-- <div class="popup-social text-center">
                        <a class="facebook brd-rd3" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
                        <a class="google brd-rd3" href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i> Google</a>
                        <a class="twitter brd-rd3" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
                    </div> -->
                    <!-- <span class="popup-seprator text-center"><i class="brd-rd50">or</i></span> -->

                    <form method="post" action="{{ route('register') }}" autocomplete="off" class="sign-form"
                        enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="text" placeholder="Username" name="name">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="email" placeholder="Email" name="email">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="password" placeholder="Password" name="password">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="password" placeholder="Confirm Password">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <button class="orange-bg brd-rd3" type="submit" style="color: white;">REGISTER
                                    NOW</button>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <a class="sign-btn" href="#" title="" itemprop="url">Already Registered?
                                    Sign in</a>
                                <!-- <a class="recover-btn" href="#" title="" itemprop="url">Recover my password</a> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>




    </main><!-- Main Wrapper -->
    {{-- @section('scripts')

    @endsection --}}

    {{-- <script type="text/javascript">
        $('#instruction').submit(function(e) {
            e.preventDefault();

            // alert("Yes");

            var form = $(this);
            var actionUrl = form.attr('action');

            $.ajax({
                type: form.attr('method'),
                url: url('instruction'),
                data: form.serialize(),
                success: function(data) {
                    alert(data);
                    console.log(data);
                },
                error: function(data) {
                    alert('There was an error');
                    console.log(data);
                }
            });
        });
    </script> --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(function() {
            $('#instruction').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: $(this).attr('action'),
                    method: $(this).attr('method'),
                    data: new FormData(this),
                    processData: false,
                    dataType: 'json',
                    contentType: false,

                    console.log("yes ");
                    alert("No way");
                    // beforeSend: function() {

                    // },
                    success: function(data) {
                        if (data.status == 0) {
                            alert('There was a problem');
                        } else {
                            alert('The submit was successful');
                        }
                    }
                });
            });
        });
    </script>

    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('https://maps.googleapis.com/maps/api/js?v=3.exp') }}"></script>
    <script src="{{ asset('/assets/js/google-map-int.js') }}"></script>
    <script src="{{ asset('/assets/js/main.js') }}"></script>
</body>

</html>
