@extends('layouts.app', ['activePage' => 'products', 'title' => 'Products', 'navName' => 'Products', 'activeButton' => 'products'])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('update_product', $product->id) }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('post')

            <div class="card ">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ __('Edit Product') }}</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body ">
                  <div class="row">
                    <div class="col-md-12 text-right">
                        <a href="{{ route('products.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                    </div>
                  </div>
                  <div class="row">
                                     <label class="col-sm-2 col-form-label">{{ __('Product Name') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="product_name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ $product['product_name'] }}" required="true" aria-required="true"/>
                        @if ($errors->has('name'))
                          <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>


                  <div class="row">
                                     <label class="col-sm-2 col-form-label">{{ __('Image') }}</label>
                    <div class="col-sm-7 mt-3">
                        <img src="/images/product/{{ $product['image'] }}" width="80px" height="80px" alt="">
                       <input type="file" name="image">
                    </div>
                  </div>


                        <div class="row mt-3">
                                     <label class="col-sm-2 col-form-label">{{ __('Price') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="price" id="input-name" type="text" placeholder="{{ __('Price') }}" value="{{ $product['price'] }}" required="true" aria-required="true"/>
                        @if ($errors->has('name'))
                          <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>

                  <div class="row mt-3">
                    <label class="col-sm-2 col-form-label">{{ __('Quantity') }}</label>
                    <div class="col-sm-7">
                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="quantity" id="input-name" type="text" placeholder="{{ __('Quantity') }}" value="{{ $product['quantity'] }}" required="true" aria-required="true"/>
                        @if ($errors->has('name'))
                            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                        @endif
                        </div>
                    </div>
                </div>

                   <div class="row pb-3">
                              <label for="category" class="col-sm-2 col-form-label">
                                  {{ __('Category') }}
                              </label>
                              <div class="col-sm-7">
                                  <select name="category_id" class="form-control">
                                      @foreach($category as $data)
                                          <option value=" {{ $data->id }} "> {{ $data->category_name }} </option>
                                      @endforeach
                                  </select>
                              </div>
                          </div>

                          <div class="row mt-3">
                            <label class="col-sm-2 col-form-label">{{ __('Edited Category?') }}</label>
                            <div class="col-sm-7">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <input class="" style="padding: 9px" name="edited_category" id="input-name" type="checkbox" aria-required="true"/>
                                {{-- @if ($errors->has('name'))
                                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                @endif --}}
                                </div>
                            </div>

                          @if (Auth::user()->role_id == 1)

                  <div class="row pb-3">
                              <label for="vendor" class="col-sm-2 col-form-label">
                                  {{ __('Vendor') }}
                              </label>
                              <div class="col-sm-7">
                                  <select name="vendor_id" class="form-control">
                                      @foreach($vendors as $data)
                                          <option value=" {{ $data->id }} "> {{ $data->vendor_name }} </option>
                                      @endforeach
                                  </select>
                              </div>
                          </div>

                          @endif


                <div class="card-footer ml-auto mr-auto">
                  <button type="submit" class="btn btn-primary">{{ __('Edit') }}</button>
                </div>
              </div>
        </form>
        </div>
      </div>
    </div>
  </div>
@endsection
