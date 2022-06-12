{{-- @extends('frontend.layout') --}}
@section('content')


	<div class="row m-0 p-2 justify-content-center">
		<div class="col-lg-6 col-md-6 col-sm-12">
			<p class="text-center h4">Order Details</p>
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
			        <tbody>

			        <?php $total = 0 ?>

			        @if(session('cart'))
			            @foreach((array) session('cart') as $id => $details)

			                <?php $total += $details['price'] * $details['quantity'] ?>

			                <input type="hidden" name="prod_id[]" value=" {{ $details['prod_id'] }} " id="product_id">
			                <input type="hidden" name="prod_qty[]" value=" {{ $details['quantity'] }} ">
			                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
			                <tr>
			                    <td data-th="Product">
			                        <div class="row">
			                            <div class="col-sm-3 hidden-xs"><img src="/storage/{{ $details['photo'] }}" width="80px" height="80px" class="img-responsive"/></div>
			                            <div class="col-sm-9">
			                                <h4 class="nomargin">{{ $details['name'] }}</h4>
			                            </div>
			                        </div>
			                    </td>
			                    <td data-th="Price">${{ $details['price'] }}</td>
			                    <td data-th="Quantity" class="text-center">
			                        {{ $details['quantity'] }}
			                    </td>
			                    <td data-th="Subtotal" class="text-center">$<span class="product-subtotal">{{ $details['price'] * $details['quantity'] }}</span></td>

			                </tr>
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
			<p>Address Details</p>
			<form method="post" action="#">

					<div class="form-group">
					    <label for="inputname">Name</label>
					    <input type="text" class="form-control" id="inputAddress" placeholder="Name" value=" {{ Auth::user()->name }} ">
					</div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputEmail4">Email</label>
				      <input type="email" class="form-control" id="inputEmail4" value=" {{ Auth::user()->email }} ">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputPassword4">Telephone</label>
				      <input type="text" class="form-control" id="inputPassword4" value=" {{ Auth::user()->phone_number }} ">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputAddress">Address</label>
				    <input type="text" class="form-control" id="inputAddress" placeholder="Utawala, Nairobi">
				  </div>

				  <button type="submit" class="btn btn-primary"Information>Confirm Billing Information</button>
				</form>
		</div>
		<div class="col-md-10 col-lg-10 col-sm-12 mt-3 jumbotron pb-3 text-center">
			 <form>
            		@csrf
            		<input type="hidden" name="id" value="{{ Auth::user()->id }}" id="user_id">
            		<input type="hidden" name="total" value="{{ $total }}" id="total">

            		 <div class="row pt-3">
                        <label class="col-sm-4 col-form-label">{{ __('Phone Number') }}</label>
                             <div class="col-sm-8">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                  <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="phonenumber" id="phone_number" type="text" placeholder="{{ __('2547') }}" value=" {{ Auth::user()->phone_number }} " required="true" aria-required="true"/>
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
		</div>
	</div>

@endsection

@section('scripts')
<script type="text/javascript">
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

				url:' {{ route('mpesa.checkout') }} ',
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

						url:' {{ route('mpesa.confirm') }} ',
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

										url:'{{ route('order.store') }}',
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
													 url: '{{ url('remove-from-cart') }}',
							                    type: "DELETE",
							                    data: {
							                            "_token": '{{ csrf_token() }}',
							                            id: product_id[i].value,
							                          },
							                    dataType: "json",
							                    success: function (response)
							                    {
							                     	console.log('item removed from cart');
							                     	window.location.href = " {{ route('store') }} ";
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
