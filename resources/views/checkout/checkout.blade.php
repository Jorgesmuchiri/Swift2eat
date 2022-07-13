{{-- @extends('frontend.layout') --}}
{{-- @section('content') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Swyft2eat</title>
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css"> --}}


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
        </div><!-- Responsive Header -->
<br>
<br>
<br><br><br><br><br><br><br><br><br>

	<div class="row m-0 p-2 justify-content-center">
		<div class="col-lg-6 col-md-6 col-sm-12">

        <h4 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Order</span> Details</h4>

			<!-- <p class="text-center h4">Order </p> -->
			  <table id="cart" class="table table-hover table-condensed">
			        <thead>
			        <tr>
			            <th style="width:50%">Product</th>
			            <th style="width:10%">Price</th>
			            <th style="width:8%">Quantity</th>
			            <th style="width:22%" class="text-center">Subtotal</th>
			            <th style="width:10%"></th>
			        </tr>
			        </thead>
			        <tbody style="height: 130px">

			        <?php $total = 0 ?>

			        @if(session('cart'))
			            @foreach((array) session('cart') as $id => $details)

			                <?php $total += $details['price'] * $details['quantity'] ?>

			                {{-- <input type="hidden" name="prod_id[]" value=" {{ $details['prod_id'] }} " id="product_id">
			                <input type="hidden" name="prod_qty[]" value=" {{ $details['quantity'] }} ">
			                <input type="hidden" name="user_id" value="{{Auth::user()->id}}"> --}}
			                <tr>
			                    <td data-th="Product">
			                        <div class="row">
			                            <div class="col-sm-3 hidden-xs"><img src="/images/product/{{ $details['photo'] }}" width="100px" height="100px" class="img-responsive"/></div>
			                            <div class="col-sm-9">
			                                <h4 class="nomargin">{{ $details['name'] }}</h4>
			                            </div>
			                        </div>
			                    </td>

                                @php
                                    $price  = $details['price'];
                                @endphp

			                    <td data-th="Price" id="price">Kshs.{{ $details['price'] }}</td>
			                    <td data-th="Quantity" class="text-center">
                                    <input type="number" min="1" id="quant" oninput="myFunction({{ $details['price'] }}, {{ $details['prod_id'] }})" value="1" style="width:60%">
			                    </td>
                                {{-- <td id="tot"></td> --}}
			                    <td data-th="Subtotal" class="text-center">Kshs.<span class="product-subtotal" id="total">{{ $details['price'] }}</span></td>

			                </tr>
                            @php
                                $total += $details['price'] * $details['quantity'];
                            @endphp
			            @endforeach
			        @endif

			        </tbody>
				        <tfoot>
				        <tr class="visible-xs">
				            <td class="text-center"><strong>Total $<span class="cart-total">{{ $total }}</span></strong></td>
				        </tr>

				        </tfoot>
   			 </table>
		</div>
		<div class="col-md-6 col-lg-6 col-sm-12">
        <h4 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Order</span> Information</h4>




            <div class="book-table">
			<form method="post" action="{{ route('store_order') }}">
                @method('post')
                @csrf
					{{-- <div class="form-group">
					    <label for="inputname">Name</label>
					    <input type="text" class="input-field brd-rd2" id="inputAddress" placeholder="Name" value=" {{ Auth::user()->name }} ">
					</div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputEmail4">Email</label>
				      <input type="email" class="input-field brd-rd2" id="inputEmail4" value=" {{ Auth::user()->email }} ">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputPassword4">Telephone</label>
				      <input type="text" class="input-field brd-rd2" id="inputPassword4" value=" {{ Auth::user()->phone_number }} ">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputAddress">Address</label>
				    <input type="text" class="input-field brd-rd2" id="inputAddress" placeholder="Utawala, Nairobi">
				  </div>

				  <button type="submit" class="btn btn-primary"Information>Confirm Billing Information</button> --}}
                  <div class="row">
                    {{-- <div class="col-md-6 col-sm-6 col-lg-6">
                        <div class="input-field brd-rd2"><i class="fa fa-user"></i> <input type="text" placeholder="NAME"></div>
                    </div> --}}
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <div class="input-field brd-rd2"><i class="fa fa-phone"></i> <input type="text" placeholder="PHONE" name="phone"></div>
                    </div>
                    <!-- <div class="col-md-6 col-sm-6 col-lg-6">
                        <div class="select-wrp2">
                            <select>
                                <option>Questions</option>
                                <option>Questions No 1</option>
                                <option>Questions No 2</option>
                                <option>Questions No 3</option>
                            </select>
                        </div>
                    </div> -->
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <div class="input-field brd-rd2"><i class="fa fa-envelope"></i> <input type="email" placeholder="EMAIL" name="email"></div>
                    </div>
                    {{-- <div class="col-md-6 col-sm-6 col-lg-6">
                        <div class="input-field brd-rd2"><i class="fa fa-number"></i> <input type="time" placeholder="PickUp Time"></div>
                    </div> --}}
                    {{-- <div class="col-md-6 col-sm-6 col-lg-6">
                        <div class="input-field brd-rd2"><i class="fa fa-calendar"></i> <input class="datepicker" id="datetimepicker" type="text" name="date" placeholder="SELECT DATE"></div>
                    </div> --}}
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <div class="input-field brd-rd2"><i class="fa fa-clock-o"></i> <input id="timepicker" type="time" placeholder="SELECT TIME" name="time"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="textarea-field brd-rd2"><i class="fa fa-pencil"></i> <textarea placeholder="Your Instruction" name="instruction"></textarea></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <button class="btn btn-primary" type="submit">Send Order</button>
                    </div>
                    </div>
				</form>
		</div>
		{{-- <div class="col-md-10 col-lg-10 col-sm-12 mt-3 jumbotron pb-3 text-center">
			 <form>
            		@csrf
            		<input type="hidden" name="id" value="{{ Auth::user()->id }}" id="user_id">
            		<input type="hidden" name="total" value="{{ $total }}" id="total">

            		 <div class="row pt-3">
                        <label class="col-sm-4 col-form-label">{{ __('Phone Number') }}</label>
                             <div class="col-sm-8">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                  <input class="input-field brd-rd2{{ $errors->has('name') ? ' is-invalid' : '' }}" name="phonenumber" id="phone_number" type="text" placeholder="{{ __('2547') }}" value=" {{ Auth::user()->phone_number }} " required="true" aria-required="true"/>
                                  @if ($errors->has('name'))
                                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                  @endif
                                </div>
                              </div>
                            </div>
                           <!--  <div class="col-md-12 col-sm-12 col-lg-12 text-center pt-5">
                            	<input type="submit" name="submit" value="LIPA NA MPESA" class="btn btn-solid btn-success">
                            </div> -->

                            <button class="btn btn-solid btn-success mt-3" id="checkoutOrder">LIPA NA MPESA
            	 </button>

            	</form>


                </div>
            	 <div class="recieving-payment" style="font-size:24px; display: none">
            	  Recieving Payment <i class="fa fa-circle-o-notch fa-spin btn-loading"></i>
            	  </div>
            	 <div class="confirm-payment" style="font-size:24px; display: none">
            	  Confirming Payment <i class="fa fa-circle-o-notch fa-spin btn-loading"></i>
            	  </div>

            	<div class="processing-order" style="font-size:24px; display: none">
            		Processing Order <i class="fa fa-circle-o-notch fa-spin btn-loading"></i>
            	</div>

            	<div class="mpesa-failed" style="font-size:24px; display: none">
            		MPESA PAYMENT DID NOT GO THROUGH
            	</div>
            	<div class="order-processed" style="font-size:24px; display: none">
            		Order Has Been Processed.... Thank you for Shopping with Us...
            	</div>
		</div> --}}
	</div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script type="text/javascript">
        function myFunction(standardPrice,productId) {
            var x = document.getElementById("quant").value;
            updatePrice(x,standardPrice,productId);
        }

        function updatePrice(quantity, standardPrice,productId){
            document.getElementById("total").innerHTML = quantity*standardPrice;
        }

        // $(function()) {
        //     $('#timepicker').on('click', function(e) {
        //         console.log('Clicked');
        //     });
        // }
        // TODO: Return This Section line 399 - 403
        $(document).ready(function(){
            $('#timepicker').on('click', function() {
                jQuery('#list').show();
            });
        });
    </script>
    </main>



</body>
</html>
{{-- @endsection --}}

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('#datetimepicker').datetimepicker();
    });
</script>

<script type="text/javascript">


function getTotal()
{

    var total = 0;



}

	$('#checkoutOrder').click(function(e)
	{
		e.preventDefault();

		// console.log('clicked');

		var product_id = document.getElementsByName('prod_id[]');
		var product_qty = document.getElementsByName('prod_qty[]');

		var datasend_id = {};
		var datasend_qty = {};
		var user_id = document.getElementsByName('user_id')[0].value;

		var total = document.getElementById('total').value;
		var phone_number = document.getElementById('phone_number').value;
		// console.log(phone_number);


		$('.recieving-payment').show();

		//AJAX CALL TO INITIATE M-PESA STK-PUSH REQUEST

		$.ajax({

				// url:'  ',
				type:"POST",
				data:{
						"_token": "{{ csrf_token() }}",
						user_id:user_id,
						total:2,
						phonenumber:phone_number,
				},
				success:function(response)
				{
					console.log(response);
					// var checkout_id = response;
					$('.recieving-payment').hide();
					$('.confirm-payment').show();

					//TIMEOUT ALLOWS USER TO COMPLETE TRANSACTION BEFORE AUTOMATICALLY VALIDATING THE TRANSACTION

					setTimeout(function(e)
					{

					//AJAX CALL TO CHECK THE TRANSACTION STATUS

						$.ajax({

						// url:' ',
						type:"POST",
						data:{
								"_token": "{{ csrf_token() }}",
								user_id:user_id,
								// request_id:checkout_id,
							  },
						success:function(response)
						{
							console.log(response);

							$('.confirm-payment').hide();

							if (response == 0)
							{
								$('.processing-order').show();

								for (var i=0; i < product_id.length; i++)
								{
									datasend_id[i] = product_id[i].value;
									datasend_qty[i] = product_qty[i].value;
								}

								//AJAX CALL TO PLACE ORDER AUTOMATICALLY

									$.ajax({

										// url:'',
										type:"POST",
										data:{
												"_token": "{{ csrf_token() }}",
												datasend_id:datasend_id,
												datasend_qty:datasend_qty,
												user_id:user_id,
										},
										dataType:"json",
										success:function(response)
										{
											console.log(response);

											//AJAX CALL TO REMOVE THE ORDER ITEMS FROM CART
											for (var i = 0; i < product_id.length; i++)
											{
												// console.log(product_id[i].value);

												$.ajax({
													//  url: '',
							                    type: "DELETE",
							                    data: {
							                            "_token": '{{ csrf_token() }}',
							                            id: product_id[i].value,
							                          },
							                    dataType: "json",
							                    success: function (response)
							                    {
							                     	console.log('item removed from cart');
							                     	window.location.href = "  ";
							                    }

												});

											}

											$('.processing-order').hide();
											$('.order-processed').show();
										}

									});
							}else
							{
								$('.mpesa-failed').show();
							}

						}

						});

					},8000);

				}

		});

		// console.log(user_id);


	});
</script>
@endsection
