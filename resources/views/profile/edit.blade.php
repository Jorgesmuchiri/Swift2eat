@extends('layouts.app', ['activePage' => 'user', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'User Profile', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="section-image">
                <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                <div class="row">

                    <div class="card col-md-8">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h3 class="mb-0">{{ __('Edit Profile') }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('profile.update') }}" autocomplete="off"
                                enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>

                                @include('alerts.success')
                                @include('alerts.error_self_update', ['key' => 'not_allow_profile'])

                                <div class="pl-lg-4">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            <i class="w3-xxlarge fa fa-user"></i>{{ __('Name') }}
                                        </label>
                                        <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ Auth::user()->role_id==2 ? $vendor->vendor_name : Auth::user()->name  }}" required autofocus>

                                        @include('alerts.feedback', ['field' => 'name'])
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-email"><i class="w3-xxlarge fa fa-envelope-o"></i>{{ __('Email') }}</label>
                                        <input type="email" name="email" id="input-email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>

                                        @include('alerts.feedback', ['field' => 'email'])
                                    </div>

                                    @if (Auth::user()->role_id == 2)
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-no">
                                                <i class="w3-xxlarge fa fa-phone"></i>{{ __('Phone Number') }}
                                            </label>
                                            <input type="text" name="phone_no" id="input-no" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Phone Number') }}" value="{{ old('name', $vendor->phone_no) }}" required autofocus>

                                            @include('alerts.feedback', ['field' => 'phone_no'])
                                        </div>

                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-location">
                                                <i class="w3-xxlarge fa fa-map-marker"></i>{{ __('Location') }}
                                            </label>
                                            <input type="text" name="location" id="input-location" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Location') }}" value="{{ old('name', $vendor->location) }}" autofocus>

                                            @include('alerts.feedback', ['field' => 'location'])
                                        </div>

                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-location">
                                                <i class="w3-xxlarge bi bi-cash"></i>{{ __('Till Number') }}
                                            </label>
                                            <input type="text" name="tillno" id="input-location" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Till Number') }}" value="{{ old('name', $vendor->till_no) }}" autofocus>

                                            @include('alerts.feedback', ['field' => 'tillno'])
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label">
                                                <i class="w3-xxlarge fa fa-file-image-o"></i>{{ __('Vendor Logo') }}</label>
                                            <div class="col-sm-2 mt-3">
                                                <input type="file" name="image">
                                            </div>
                                        </div>
                                    @endif



                                    <div class="text-center">
                                        <button type="submit" class="btn btn-default mt-4">{{ __('Save') }}</button>
                                    </div>
                                </div>
                            </form>
                            <hr class="my-4" />
                            <form method="post" action="{{ route('profile.password') }}">
                                @csrf
                                @method('patch')

                                <h6 class="heading-small text-muted mb-4">{{ __('Password') }}</h6>

                                @include('alerts.success', ['key' => 'password_status'])
                                @include('alerts.error_self_update', ['key' => 'not_allow_password'])

                                <div class="pl-lg-4">
                                    <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-current-password">
                                            <i class="w3-xxlarge fa fa-eye-slash"></i>{{ __('Current Password') }}
                                        </label>
                                        <input type="password" name="old_password" id="input-current-password" class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Current Password') }}" value="" required>

                                        @include('alerts.feedback', ['field' => 'old_password'])
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-password">
                                            <i class="w3-xxlarge fa fa-eye-slash"></i>{{ __('New Password') }}
                                        </label>
                                        <input type="password" name="password" id="input-password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('New Password') }}" value="" required>

                                        @include('alerts.feedback', ['field' => 'password'])
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-password-confirmation">
                                            <i class="w3-xxlarge fa fa-eye-slash"></i>{{ __('Confirm New Password') }}
                                        </label>
                                        <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control" placeholder="{{ __('Confirm New Password') }}" value="" required>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-default mt-4">{{ __('Change password') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="card-image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="author">
                                    @if(Auth::user()->role_id == 2)
                                    <a href="#">
                                        <img class="avatar border-gray" src="/images/vendors/{{ $vendor->vendor_logo }}" alt="...">
                                        <h5 class="title">{{ $vendor->vendor_name }}</h5>
                                    </a>
                                    @endif
                                    <p class="description">
                                        {{ Auth::user()->role_id == 2 ? $vendor->email : Auth::user()->email }}
                                    </p>
                                </div>
                                <p class="description text-center">
                                 @if(Auth::user()->role_id == 2)
                                {{ $vendor->location }}
                                @endif
                                    <br> {{ Auth::user()->role_id == 2 ? $vendor->phone_no : Auth::user()->phone_no }}
                                    {{-- <br> {{ __('I am in that two seat Lambo') }} --}}
                                </p>
                            </div>
                            <hr>
                            <div class="button-container mr-auto ml-auto">
                                <button href="#" class="btn btn-simple btn-link btn-icon">
                                    <i class="fa fa-facebook-square"></i>
                                </button>
                                <button href="#" class="btn btn-simple btn-link btn-icon">
                                    <i class="fa fa-twitter"></i>
                                </button>
                                <button href="#" class="btn btn-simple btn-link btn-icon">
                                    <i class="fa fa-google-plus-square"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
