@extends('layouts.user')
@section('content')
    <div class="py-6 py-lg-8 bg-cover bg-center d-flex align-items-center position-relative"
        style="background-image: url({{asset('img/2.png')}})">
        <span class="mask"></span>
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-5 col-md-7 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3 text-center">
                                <h1 class="h3 text-primary mb-2">
                                    {{ trans('site.login_your_account') }}
                               </h1>                                
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                            @csrf                                
                                <div class="row div-email">
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="email">{{ trans('fields.email') }}<span
                                                    class="require-star">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="fas fa-user"></i></span></div>
                                                <input type="text" class="form-control required " autofocus ""
                                                    value="" id="email" name="email" maxlength="255" required>
                                            </div>
                                            <small class="form-text text-muted text-help"></small>
                                            <span class="invalid-feedback"></span>
                                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="password">{{ trans('fields.password') }}<span
                                                    class="require-star">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="fas fa-key"></i></span></div>
                                                <input type="password" class="form-control required " value=""
                                                    id="password" name="password" maxlength="100" required><span class="">
                                            </div>
                                            <small class="form-text text-muted text-help"></small>
                                            <span class="invalid-feedback"></span>
                                        </div>
                                    </div>
                                </div>

                                 <div class="row div-email">                                   
                                    <div class="col-12 text-right">
                                        <a class="link-muted text-capitalize font-weight-normal"
                                            href="{{route('password.request')}}">{{trans('site.forget_password')}}?</a>
                                    </div>
                                </div>

                                <div class="my-3">                                
                                    <button type="submit" class="btn btn-block btn-primary">
                                        {{ trans('site.login_your_account_button') }}
                                    </button>
                                </div>
                            </form>

                            <div class="text-center">
                                <p class="text-muted mb-0">{{ trans('site.don_t_have_an_account') }}</p>
                                <a href="{{route('registers')}}">{{ trans('site.create_your_account') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
