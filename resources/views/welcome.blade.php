<!DOCTYPE html>
<html lang="en">
    @include('flash-message')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Swyft2eat</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">


    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/red-color.css">
    <link rel="stylesheet" href="assets/css/yellow-color.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
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
                    <div class="topbar-register">
                    <a class="ornage-bg brd-rd4" href="login" title="Register" itemprop="url">VENDOR LOGIN</a>

                        <!-- <a class="" href="login" title="Login" itemprop="url"> VENDOR LOGIN</a> -->
                    </div>
                    <div class="social1">
                        <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook-square"></i></a>
                        <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div><!-- Topbar -->
            <div class="logo-menu-sec">
                <div class="container">
                    <div class="logo"><h1 itemprop="headline"><a href="{{ url('/') }}" title="Home" itemprop="url"><img src="/assets/images/logo5.png" alt="logo.png" itemprop="image" style="width: 80px;"></a></h1></div>
                    <nav>
                        <div class="menu-sec">
                            <ul>
                                <li class="menu-item-has-children"><a href="{{ url('/') }}" title="home" itemprop="url"><span></span>HOME</a>
                                    <!-- <ul class="sub-dropdown">
                                        <li><a href="index-2.html" title="HOMEPAGE 1" itemprop="url">HOMEPAGE 1</a></li>
                                        <li><a href="index2.html" title="HOMEPAGE 2" itemprop="url">HOMEPAGE 2</a></li>
                                    </ul> -->
                                </li>

                                <li><a href="#contact" title="CONTACT US" itemprop="url"> <span></span> ABOUT US</a></li>

                                <li class="menu-item-has-children"><a href="#rest" title="RESTAURANTS" itemprop="url"><span></span>RESTAURANTS</a>
                                    {{-- <ul class="sub-dropdown">
                                        <li><a href="restaurant-found.html" title="RESTAURANT 1" itemprop="url">RESTAURANT 1</a></li>
                                        <li><a href="restaurant-found2.html" title="RESTAURANT 2" itemprop="url">RESTAURANT 2</a></li>
                                        <li><a href="restaurant-detail.html" title="RESTAURANT DETAILS" itemprop="url">RESTAURANT DETAILS</a></li>
                                        <li><a href="food-recipes.html" title="RESTAURANT DETAILS" itemprop="url">FOOD RECIPES</a></li>
                                        <li><a href="our-articles.html" title="RESTAURANT DETAILS" itemprop="url">OUR ARTICLES</a></li>
                                        <li><a href="our-menu.html" title="RESTAURANT DETAILS" itemprop="url">OUR MENU</a></li>
                                        <li><a href="our-services.html" title="RESTAURANT DETAILS" itemprop="url">OUR SERVICES</a></li>
                                    </ul> --}}
                                </li>

                                <li><a href="#contact" title="CONTACT US" itemprop="url"><span></span>CONTACT US</a></li>
                            </ul>
                            @auth
                                <a class="log-popup-btn" href="#"  itemprop="url" style="background-color: orange;">{{ auth()->user()->name }}</a>
                                {{-- <li class="menu-item-has-children" style="background-color: orange">{{ auth()->user()->name }}</a></li> --}}
                                <ul class="sub-dropdown">
                                    <li><a href="{{ route('logout') }}" >Log Out</a></li>
                                </ul>
                                @else

                                <a class="log-popup-btn" href="#" title="Login" itemprop="url" style="background-color: orange;">Login</a>
                            @endauth
                        </div>
                    </nav><!-- Navigation -->
                </div>
            </div><!-- Logo Menu Section -->
        </header><!-- Header -->

        {{-- <div class="responsive-header">
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
                                <li class="menu-item-has-children"><a href="/" title="home" itemprop="url"><span></span>HOME</a>
                                    <!-- <ul class="sub-dropdown">
                                        <li><a href="index-2.html" title="HOMEPAGE 1" itemprop="url">HOMEPAGE 1</a></li>
                                        <li><a href="index2.html" title="HOMEPAGE 2" itemprop="url">HOMEPAGE 2</a></li>
                                    </ul> -->
                                </li>

                                <li><a href="contact.html" title="CONTACT US" itemprop="url"> <span></span> ABOUT US</a></li>

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

                                <li><a href="contact.html" title="CONTACT US" itemprop="url"><span></span>CONTACT US</a></li>
                            </ul>
                </div>
                <div class="topbar-register">
                <a class="ornage-bg brd-rd4" href="login" title="Register" itemprop="url">VENDOR LOGIN</a>
                </div>
                <div class="social1">
                    <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook-square"></i></a>
                    <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
                </div>
                <div class="register-btn">
                <a class="log-popup-btn" href="#" title="Login" itemprop="url" style="background-color: orange;">Login</a>
                </div>
            </div><!-- Responsive Menu -->
        </div><!-- Responsive Header --> --}}

        <section>
            <div class="block blackish opac50">
                <div class="fixed-bg" style="background-image: url(https://images.unsplash.com/photo-1580218863909-d882fbb62d7b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1331&q=80);"></div>
                <div class="restaurant-searching style2 text-center">
                    <div class="restaurant-searching-inner">
						<span style="font-family: 'Times New Roman'">Swyft2<i style="color:orange;">Eat</i> </span>
                        <h2 itemprop="headline">Why wait and you can order</h2>
                        <!-- <form class="restaurant-search-form2 brd-rd30">
                            <input class="brd-rd30" type="text" placeholder="RESTAURANT NAME">
                            <button class="brd-rd30 red-bg" type="submit">SEARCH</button>
                        </form> -->
                    </div>
                </div><!-- Restaurant Searching -->
            </div>
        </section>

        <!-- <section>
            <div class="block no-padding overlape-45">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="top-restaurants-wrapper">
                                <ul class="restaurants-wrapper style2">
                                    <li class="wow bounceIn" data-wow-delay="0.2s"><div class="top-restaurant"><a class="brd-rd50" href="#" title="Restaurant 1" itemprop="url"><img src="assets/images/resource/top-restaurant1.png" alt="top-restaurant1.png" itemprop="image"></a></div></li>
                                    <li class="wow bounceIn" data-wow-delay="0.4s"><div class="top-restaurant"><a class="brd-rd50" href="#" title="Restaurant 2" itemprop="url"><img src="assets/images/resource/top-restaurant2.png" alt="top-restaurant2.png" itemprop="image"></a></div></li>
                                    <li class="wow bounceIn" data-wow-delay="0.6s"><div class="top-restaurant"><a class="brd-rd50" href="#" title="Restaurant 3" itemprop="url"><img src="assets/images/resource/top-restaurant3.png" alt="top-restaurant3.png" itemprop="image"></a></div></li>
                                    <li class="wow bounceIn" data-wow-delay="0.8s"><div class="top-restaurant"><a class="brd-rd50" href="#" title="Restaurant 4" itemprop="url"><img src="assets/images/resource/top-restaurant4.png" alt="top-restaurant4.png" itemprop="image"></a></div></li>
                                    <li class="wow bounceIn" data-wow-delay="1s"><div class="top-restaurant"><a class="brd-rd50" href="#" title="Restaurant 5" itemprop="url"><img src="assets/images/resource/top-restaurant5.png" alt="top-restaurant5.png" itemprop="image"></a></div></li>
                                    <li class="wow bounceIn" data-wow-delay="1.2s"><div class="top-restaurant"><a class="brd-rd50" href="#" title="Restaurant 5" itemprop="url"><img src="assets/images/resource/top-restaurant6.png" alt="top-restaurant6.png" itemprop="image"></a></div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- top returents -->

		<section>
            <div class="block remove-bottom">
                <div class="container">
                    <div class="row">
						<div class="welcome-sec">
							<div class="col-md-6 col-sm-6 col-lg-6">
								<div class="welcome-secinfo">
									<h2>Welcome To Swyft2Eat</h2>
									<span>We value efficiency</span>
									<p>Everyone in the restaurant space these days is accepting restaurant delivery orders. Struck with high rentals and poor sales, many restaurants are now even making food delivery as their primary business model and turning into cloud kitchens. With such top competition, you need to ensure that you are ahead of your competition.</p>
									<div class="award">
										<!-- <img src="assets/images/award.png" alt=""> -->
										<span></span>
									</div>
									<span class="sign">
										<!-- <img src="assets/images/sign.png" alt=""> -->
									</span>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-lg-6">
								<div class="welcome-gallery">
									<img src="https://images.unsplash.com/photo-1644677865374-1e16ac9b3253?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" alt="" width="450px">
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </section><!-- welcome section -->

        <section>
            <div class="block blackish low-opacity">
                <div class="fixed-bg" style="background-image: url(https://images.unsplash.com/photo-1644677867331-03f28942e35c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title1-wrapper text-center">
                                <div class="title1-inner">
                                    <span>Swyft2Eat</span>
                                    <h2 class="text-white" itemprop="headline">Easy order in 3 steps</h2>
                                </div>
                            </div>
                            <div class="remove-ext text-center">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="step-box wow fadeIn" data-wow-delay="0.2s">
                                            <i><img src="assets/images/resource/setp-img1.png" alt="setp-img1.png" itemprop="image"> <span class="brd-rd50 red-bg">1</span></i>
                                            <div class="setp-box-inner">
                                                <h4 itemprop="headline">Explore Restaurants</h4>
                                                <!-- <p itemprop="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> -->
                                            </div>
                                        </div><!-- Step Box -->
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="step-box wow fadeIn" data-wow-delay="0.4s">
                                            <i><img src="assets/images/resource/setp-img2.png" alt="setp-img2.png" itemprop="image"> <span class="brd-rd50 red-bg">2</span></i>
                                            <div class="setp-box-inner">
                                                <h4 itemprop="headline">Choose a Tasty Dish</h4>
                                                <!-- <p itemprop="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> -->
                                            </div>
                                        </div><!-- Step Box -->
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="step-box wow fadeIn" data-wow-delay="0.6s">
                                            <i><img src="assets/images/resource/setp-img3.png" alt="setp-img3.png" itemprop="image"> <span class="brd-rd50 red-bg">3</span></i>
                                            <div class="setp-box-inner">
                                                <h4 itemprop="headline">Place your order</h4>
                                                <!-- <p itemprop="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> -->
                                            </div>
                                        </div><!-- Step Box -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block" id="rest">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title1-wrapper text-center">
                                <div class="title1-inner">
                                    <!-- <span>Website for Restaurant and Cafe</span> -->
                                    <h2 itemprop="headline">Featured Food Joints</h2>
                                </div>
                            </div>
                            <div class="remove-ext">
                                <div class="row">

                                @foreach ($vendors as $vendor )

                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="popular-dish-box style2 wow fadeIn" data-wow-delay="0.2s">
                                            <div class="popular-dish-thumb">
                                                <a href="{{ route('restaurant-detail',$vendor->id) }}" title="" itemprop="url"><img src="assets/images/resource/popular-dish-img1.jpg" alt="popular-dish-img1.jpg" itemprop="image"></a>
                                                <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                                <!-- <span class="likes"><i class="fa fa-heart-o"></i> 12</span> -->
                                            </div>
                                            <div class="popular-dish-info">
                                                <h4 itemprop="headline"><a href="{{ route('restaurant-detail',$vendor->id) }}" title="" itemprop="url">{{$vendor->vendor_name}}</a></h4>
                                                <!-- <p itemprop="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> -->
                                                <!-- <span class="price">$85.00</span> -->
                                                <a class="brd-rd4 " href="{{ route('restaurant-detail',$vendor->id) }}" title="Order Now" itemprop="url">Order Now</a>
                                                <div class="restaurant-info">
                                                    <!-- <img src="assets/images/resource/restaurant-logo1.png" alt="restaurant-logo1.png" itemprop="image"> -->
                                                    <div class="restaurant-info-inner">
                                                        <h6 itemprop="headline"><a href="{{ route('restaurant-detail',$vendor->id) }}" title="" itemprop="url"></a></h6>
                                                        <span class="orange-clr">Location::{{$vendor->location}}</span><br>
                                                        <span class="orange-clr">Contact Us:{{$vendor->phone_no}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- Popular Dish Box -->
                                    </div>


                            @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block no-padding orange-bg">
                <img class="bottom-clouds-mockup" src="assets/images/resource/clouds2.png" alt="clouds2.png" itemprop="image">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="app-sec">
                                <div class="row">
                                    <div class="col-md-4 hidden-sm col-md-offset-1 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-1">
                                        <div class="app-mockup text-right overlape-110 wow fadeInUp" data-wow-delay="0.2s"><img src="assets/images/resource/mockup-bg.png" alt="app-mockup.png" itemprop="image"></div>
                                    </div>
                                    <div class="col-md-6 col-md-offset-1 col-sm-12 col-sm-offset-0 col-lg-6 col-lg-offset-1">
                                        <div class="app-info">
                                            <h4 itemprop="headline">Swyft2Eat</h4>
                                            <p itemprop="description">With a great variety of restaurants you can order your favourite food or explore new restaurants nearby!</p>
                                            <!-- <div class="app-download-btns">
                                                <a class="" href="#" title="Google Play Store" itemprop="url" target="_blank"><img src="assets/images/resource/app-download-btn1.png" alt="app-download-btn1.png" itemprop="image"></a>
                                                <a class="" href="#" title="Apple App Store" itemprop="url" target="_blank"><img src="assets/images/resource/app-download-btn2.png" alt="app-download-btn2.png" itemprop="image"></a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div><!-- App Section -->
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- red section -->

        <footer>
            <div class="block top-padd80 bottom-padd80 dark-bg" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="footer-data">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget about_widget wow fadeIn" data-wow-delay="0.1s">
                                            <div class="logo"><h1 itemprop="headline"><a href="#" title="Home" itemprop="url"><img src="assets/images/logo5.png" alt="logo.png" itemprop="image"></a></h1></div>
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
                                               <li><i class="fa fa-map-marker" style="color: orange;"></i> Nairobi,Kenya</li>
                                               <li><i class="fa fa-phone" style="color: orange;"></i> +254 711 281774 | +254 797 309416</li>
                                               <li><i class="fa fa-envelope" style="color: orange;"></i> <a href="#" title="" itemprop="url">info@swyft2eat.co.ke</a></li>
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
                        <img src="assets/images/logo5.png">
                        <!-- <span>with your social network</span> -->
                    </div>
                    <!-- <div class="popup-social text-center">
                        <a class="facebook brd-rd3" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
                        <a class="google brd-rd3" href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i> Google</a>
                        <a class="twitter brd-rd3" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
                    </div>
                    <span class="popup-seprator text-center"><i class="brd-rd50">or</i></span> -->
                    <form method="post" class="sign-form" action="{{ route('login') }}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="email" placeholder="Email" name="email">
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
                                <a class="recover-btn" href="{{ route('forget_password') }}" title="" itemprop="url">Recover my password</a>
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
                        <img src="assets/images/logo5.png">
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
                                <input class="brd-rd3" type="text" placeholder="Phone Number" name="phone_no">
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

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
