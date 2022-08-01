<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Swyft2eat</title>
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">


    <link rel="stylesheet" href="{{asset('/assets/css/icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/red-color.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/yellow-color.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/responsive.css')}}">
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
                        <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook-square"></i></a>
                        <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div><!-- Topbar -->
            <div class="logo-menu-sec">
                <div class="container">
                    <div class="logo"><h1 itemprop="headline"><a href="index-2.html" title="Home" itemprop="url"><img src="{{asset('assets/images/logo5.png')}}" alt="logo.png" itemprop="image" style="width: 80px;"></a></h1></div>
                    <nav>
                        <div class="menu-sec">
                            <ul>
                                <li class="menu-item-has-children"><a href="/" title="home" itemprop="url"><span></span>HOME</a>
                                    <!-- <ul class="sub-dropdown">
                                        <li><a href="index-2.html" title="HOMEPAGE 1" itemprop="url">HOMEPAGE 1</a></li>
                                        <li><a href="index2.html" title="HOMEPAGE 2" itemprop="url">HOMEPAGE 2</a></li>
                                    </ul> -->
                                </li>

                                <li><a href="#contact" title="CONTACT US" itemprop="url"> <span></span> ABOUT US</a></li>

                                <li class="menu-item-has-children"><a href="/#rest" title="RESTAURANTS" itemprop="url"><span></span>RESTAURANTS</a>
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

                                <li><a href="#contact" title="CONTACT US" itemprop="url"><span></span>CONTACT US</a></li>
                            </ul>
                            @auth
                                <a class="log-popup-btn" href="#"  itemprop="url" style="background-color: orange;">{{ auth()->user()->name }}</a>
                                {{-- <li class="menu-item-has-children" style="background-color: orange">{{ auth()->user()->name }}</a></li>
                                <ul class="sub-dropdown">
                                    <li><a href="restaurant-found.html" title="RESTAURANT 1" itemprop="url">Log Out</a></li>
                                    <li><a href="restaurant-found2.html" title="RESTAURANT 2" itemprop="url">Log Out</a></li>
                                </ul> --}}
                                @else

                                <a class="log-popup-btn" href="#" title="Login" itemprop="url" style="background-color: orange;">Login</a>
                            @endauth

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
                <div class="logo"><h1 itemprop="headline"><a href="index-2.html" title="Home" itemprop="url"><img src="/assets/images/logo5.png" alt="logo.png" itemprop="image"></a></h1></div>
                <span class="menu-btn yellow-bg brd-rd4"><i class="fa fa-align-justify"></i></span>
            </div>
            <div class="responsive-menu">
                <span class="menu-close red-bg brd-rd3"><i class="fa fa-close"></i></span>
                <div class="menu-lst">
                <ul>
                <li><a href="/" title="HOME" itemprop="url"> <span></span> HOME</a></li>


                                <li><a href="#contact" title="CONTACT US" itemprop="url"> <span></span> ABOUT US</a></li>

                                <li class="menu-item-has-children"><a href="#" title="RESTAURANTS" itemprop="url"><span></span>RESTAURANTS</a>
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

                                <li><a href="#contact" title="CONTACT US" itemprop="url"><span></span>CONTACT US</a></li>
                            </ul>
                </div>
                {{-- <div class="topbar-register">
                <a class="ornage-bg brd-rd4" href="login" title="Register" itemprop="url">VENDOR LOGIN</a>
                </div> --}}
                <div class="social1">
                    <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook-square"></i></a>
                    <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
                </div>
                <div class="register-btn">

                <a class="log-popup-btn" href="#" title="Login" itemprop="url" style="background-color: orange;">Login</a>
                </div>
            </div><!-- Responsive Menu -->
        </div><!-- Responsive Header -->

        <section>
            <div class="block">
				<div class="fixed-bg" style="background-image: url(/assets/images/topbg.jpg);"></div>
                <div class="page-title-wrapper text-center">
					<div class="col-md-12 col-sm-12 col-lg-12">
						<div class="page-title-inner">
							<h1 itemprop="headline">My Orders</h1>

						</div>
					</div>
                </div>
            </div>
        </section>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="# title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">My Orders</a></li>
                    {{-- <li class="breadcrumb-item active">Restaurant Details</li> --}}
                </ol>
            </div>
        </div>

        <section>
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th style="width:50%">Product</th>
			            <th style="width:10%">Price</th>
			            <th style="width:8%">Quantity</th>
                        <th style="width: 10%">Status</th>
                        <th style="width: 10%">Instruction</th>
			            <th style="width:22%">Subtotal</th>
			            <th style="width:10%">Order Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0 ?>
                    @foreach ($orders as $order)
                    <?php $total += $order['total'] ?>
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-3 hidden-xs"><img src="/images/product/{{ $order->products['image'] }}" width="80px" height="80px" class="img-responsive"/></div>
                                    <div class="col-sm-9">
                                        <h4 class="nomargin">{{ $order->products['product_name'] }}</h4>
                                    </div>
                                </div>
                            </td>
                            <td>Ksh. {{ $order->products['price'] }}</td>
                            <td>{{ $order['quantity'] }}</td>
                            <td>{{ $order['status'] }}</td>
                            <td>{{ $order['instruction'] }}</td>
                            <td>Ksh. {{ $order['total'] }}</td>
                            <td>{{ $order['created_at']->format('d/m/Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td class="text-center">Total ${{ $total }}</td>
                    </tr>
                </tfoot>

            </table>
            {{ $orders->links() }}
            {{-- <div class="block gray-bg top-padd30">
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
                                                            <li><img class="brd-rd3" src="{{asset('https://img.freepik.com/free-photo/fried-chicken-with-french-fries-nuggets-meal_1339-78221.jpg?w=2000')}}" alt="restaurant-detail-big-img1-1.jpg" itemprop="image"></li>
                                                        </ul>

                                                    </div>
                                                    <div class="restaurant-detail-title">
                                                        <h1 itemprop="headline">My Orders</h1>
                                                        <div class="info-meta">
                                                            <!-- <span>Greater Kailash (GK) 2</span> -->
                                                            <!-- <span><a href="#" title="" itemprop="url">Bakery</a>, <a href="#" title="" itemprop="url">Cafe</a></span> -->
                                                        </div>
                                                        <div class="rating-wrapper">
                                                            <a class="gradient-brd brd-rd2" href="#" title="" itemprop="url"><i class="fa fa-star"></i> Rate <i>4.0</i></a>
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
                                                                <div class="share-wrapper">
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="restaurant-detail-tabs">
                                                        <ul class="nav nav-tabs">
                                                            <li class="active"><a href="#tab1-1" data-toggle="tab"><i class="fa fa-cutlery"></i> Menu</a></li>
                                                            <!-- <li><a href="#tab1-2" data-toggle="tab"><i class="fa fa-picture-o"></i> Gallery</a></li> -->
                                                            <li><a href="#tab1-3" data-toggle="tab"><i class="fa fa-star"></i> Reviews</a></li>
                                                            <li><a href="#tab1-4" data-toggle="tab"><i class="fa fa-book"></i>Make Order</a></li>
                                                            <li><a href="#tab1-5" data-toggle="tab"><i class="fa fa-info"></i> Restaurant Info</a></li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane fade in active" id="tab1-1">
                                                                <form class="search-dish">
                                                                    <input type="text" placeholder="Search here">
                                                                    <button type="submit"><i class="fa fa-search"></i></button>
                                                                </form>

                                                                <div class="dishes-list-wrapper">
                                                                    <!-- <span class="post-rate red-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span> -->

                                                                    <ul class="dishes-list">
                                                                    @foreach ( $vendors->products as $vendor )

                                                                        <li class="wow fadeInUp" data-wow-delay="0.1s">
                                                                            <div class="featured-restaurant-box">
                                                                                <div class="featured-restaurant-thumb">
                                                                                    <a href="#" title="" itemprop="url"><img src="/images/product/{{$vendor->image}}" alt="{{$vendor->product_name}}" itemprop="image"></a>
                                                                                </div>
                                                                                <div class="featured-restaurant-info">
                                                                                    <h4 itemprop="headline"><a href="#" title="" itemprop="url">{{$vendor->product_name}}</a></h4>
                                                                                    <span class="price">{{$vendor->price}}</span>

                                                                                </div>
                                                                                <div class="ord-btn">
                                                                                    <a class="brd-rd2" href="{{ route('add_to_cart', [$vendor->id,$vendors]) }}" title="Order Now" itemprop="url" style="background-color: orange;">Order Now</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        @endforeach

                                                                    </ul>
                                                                </div>


                                                            </div>


                                                            <div class="tab-pane fade" id="tab1-3">
                                                                <div class="customer-review-wrapper">
                                                                    <h4 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Customer</span> Reviews</h4>
                                                                    <ul class="comments-thread customer-reviews">
                                                                        @foreach ($reviews as $review )
                                                                         @if ($reviews->isEmpty())

                                                                          <p> No customer reviews found</p>


                                                                          @else


                                                                        <li>
                                                                            <div class="comment">
                                                                                <img class="brd-rd50" src="assets/images/resource/review-img1.jpg" alt="review-img1.jpg" itemprop="image">
                                                                                <div class="comment-info">
                                                                                    <h4 itemprop="headline"><a href="#" title="" itemprop="url">{{$review->name}}</a></h4>
                                                                                    <p itemprop="description">{{$review->comment}}<</p>

                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        @endif
                                                                        @endforeach


                                                                    </ul>
                                                                    <div class="your-review">
                                                                        <h4 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Write</span> Review Here</h4>
                                                                        <form class="review-form">
                                                                            <textarea class="brd-rd5"></textarea>
                                                                            <button class="brd-rd2 red-bg" type="submit">POST REVIEW</button>

                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="tab1-4">
                                                                <div class="book-table">
                                                                    <h4 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Make</span> Order</h4>
                                                                    <form>
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="input-field brd-rd2"><i class="fa fa-user"></i> <input type="text" placeholder="NAME"></div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="input-field brd-rd2"><i class="fa fa-phone"></i> <input type="text" placeholder="PHONE"></div>
                                                                            </div>

                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="input-field brd-rd2"><i class="fa fa-envelope"></i> <input type="email" placeholder="EMAIL"></div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="input-field brd-rd2"><i class="fa fa-number"></i> <input type="number" placeholder="Quantity"></div>
                                                                            </div>

                                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                <div class="textarea-field brd-rd2"><i class="fa fa-pencil"></i> <textarea placeholder="Your Instruction"></textarea></div>
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                <button class="brd-rd2 red-bg" type="submit">Send Order</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="tab1-5">
                                                                <div class="restaurant-info-wrapper">
                                                                    <h3 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Contact</span> Us</h3>

                                                                    <ul class="restaurant-info-list">
                                                                        <li>
                                                                            <i class="fa fa-map-marker red-clr"></i>
                                                                            <strong>Address :</strong>
                                                                            <span>{{$vendors->location}}</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-phone red-clr"></i>
                                                                            <strong>Call us</strong>
                                                                            <span>{{$vendors->phone_no}}</span>
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
                                                            @if(session('cart'))
                                                                @foreach (session('cart') as $id => $details)

                                                                <li>
                                                                    <div class="dish-name">
                                                                        <i></i> <h6 itemprop="headline">{{$details['name'] }}</h6> <span style="width: 3px">{{ $details['quantity'] }}</span> <span class="price">{{$details['price']*$details['quantity'] }}</span>
                                                                    </div>

                                                                    <div class="mor-ingredients">
                                                                        <a class="red-clr" href="{{ route('remove_from_cart', $details['prod_id']) }}" title="" itemprop="url">Remove</a>
                                                                    </div>
                                                                </li>
                                                                @php

                                                                $total += $details['price'] * $details['quantity'];
                                                                @endphp

                                                                @endforeach

                                                            @endif



                                                        </ul>





                                                        <ul class="order-total">
                                                            <li><span>SubTotal</span> <i>{{$total}}</i></li>
                                                        </ul>
                                                        <ul class="order-method brd-rd2 orange-bg">
                                                            <li><span>Total</span> <span class="price">{{$total}}</span></li>
                                                            <li><a class="brd-rd2" href="{{ route('checkout') }}" title="" itemprop="url"  style="background-color: orange;">CONFIRM ORDER</a></li>
                                                        </ul>

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
            </div> --}}
        </section>
        <footer>
            <div class="block top-padd80 bottom-padd80 dark-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="footer-data">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget about_widget wow fadeIn" data-wow-delay="0.1s">
                                            <div class="logo"><h1 itemprop="headline"><a href="#" title="Home" itemprop="url"><img src="/assets/images/logo5.png" alt="logo.png" itemprop="image"></a></h1></div>
                                            <!-- <p itemprop="description">Food Ordering is a Premium HTML Template. Best choice for your online store. Let purchase it to enjoy now</p> -->
                                            <div class="social2">
                                                <a class="brd-rd50" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a class="brd-rd50" href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a class="brd-rd50" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a class="brd-rd50" href="#" title="Pinterest" itemprop="url" target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget information_links wow fadeIn" data-wow-delay="0.2s">
                                            <h4 class="widget-title" itemprop="headline">About Swyft2Eat</h4>
                                            <ul>
                                                <li><a href="#" title="" itemprop="url">Our Story</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget customer_care wow fadeIn" data-wow-delay="0.3s">
                                            <h4 class="widget-title" itemprop="headline">How to join</h4>
                                            <ul>
                                                <li><a href="#" title="" itemprop="url">Vendors</a></li>
                                                <li><a href="#" title="" itemprop="url">Customers</a></li>
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
                                               <li><i class="fa fa-envelope"></i> <a href="#" title="" itemprop="url">info@swyft2eat.co.ke</a></li>
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
                    <a class="log-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
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
                                <a class="sign-popup-btn" href="#" title="Register" itemprop="url">Not a member? Sign up</a>
                                <!-- <a class="sign-btn" href="#" title="" itemprop="url">Not a member? Sign up</a> -->
                                <a class="recover-btn" href="#" title="" itemprop="url">Recover my password</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="sign-popup text-center">
            <div class="sign-popup-wrapper brd-rd5">
                <div class="sign-popup-inner brd-rd5">
                    <a class="sign-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
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

                    <form method="post" action="{{ route('register') }}" autocomplete="off" class="sign-form" enctype="multipart/form-data" >
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
                                <input class="brd-rd3" type="password" placeholder="Confirm Password" >
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <button class="orange-bg brd-rd3" type="submit" style="color: white;">REGISTER NOW</button>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <a class="sign-btn" href="#" title="" itemprop="url">Already Registered? Sign in</a>
                                <!-- <a class="recover-btn" href="#" title="" itemprop="url">Recover my password</a> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>






    </main><!-- Main Wrapper -->

    <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/assets/js/plugins.js')}}"></script>
    <script src="{{asset('https://maps.googleapis.com/maps/api/js?v=3.exp')}}"></script>
    <script src="{{asset('/assets/js/google-map-int.js')}}"></script>
    <script src="{{asset('/assets/js/main.js')}}"></script>
</body>

</html>
