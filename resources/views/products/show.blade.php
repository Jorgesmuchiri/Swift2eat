@extends('layouts.app', ['activePage' => 'media', 'titlePage' => __('Medicine')])


@section('content')

          <form method="post" action=" {{ route('medicine.update' , $medicine->id ) }} " autocomplete="off" class="form-horizontal m-2 bordered" enctype="multipart/form-data" >
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Add Medicine') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">

                <input type="hidden" name="">

                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('medicine.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="row">
                                   <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ $medicine->medicine_name }}" required="true" aria-required="true"/>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>


                 <div class="row">
                                   <label class="col-sm-2 col-form-label">{{ __('Image') }}</label>
                  <div class="col-sm-7 mt-3">
                     <input type="file" name="image">
                  </div>
                </div>

             
                      <div class="row">
                                   <label class="col-sm-2 col-form-label">{{ __('Price') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="price" id="input-name" type="text" placeholder="{{ __('Price') }}" value="{{ $medicine->price }}" required="true" aria-required="true"/>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                  <div class="row">
                                   <label class="col-sm-2 col-form-label">{{ __('Amount') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="amount" id="input-name" type="text" placeholder="{{ __('Amount') }}" value="{{ $medicine->amount }}" required="true" aria-required="true"/>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

      <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __(' Product Specification') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" input type="text" name="specification" id="input-password" placeholder="{{ __('Product Specification') }}" value=" {{ $medicine->specification }} " required />
                      @if ($errors->has('password'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
                  </div>
                </div> 

 <div class="row pb-3">
                            <label for="category" class="col-sm-2 col-form-label">
                                {{ __('Category') }}
                            </label>
                            <div class="col-sm-7">
                                <select name="category" class="form-control">
                                  <option value=" {{ $medicine->category->id }} " > {{ $medicine->category->name }} </option>
                                    @foreach($category as $category_data)
                                        <option value=" {{ $category_data->id }} "> {{ $category_data->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                <div class="row pb-3">
                            <label for="prescription" class="col-sm-2 col-form-label">
                                {{ __('Prescription') }}
                            </label>
                            <div class="col-sm-7">
                                <select name="prescription" class="form-control">
                                        <option value="0">Does Not Require Prescription</option>
                                        <option value="1">Requires Precsription</option>
                                </select>
                            </div>
                        </div>


                     <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __(' Instructions') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                      <textarea class="form-control" name="instructions" aria-label="With textarea"> {{ $medicine->instructions }} </textarea>
                      @if ($errors->has('password'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
                  </div>
                </div> 
                           <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __(' Ingredients') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                      <textarea class="form-control" name="ingredients" aria-label="With textarea"> {{ $medicine->ingredients }} </textarea>
                     
                      @if ($errors->has('password'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
                  </div>
                </div> 
                            
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('EDIT MEDICINE') }}</button>
              </div>
            </div>
          </form>
     
@endsection