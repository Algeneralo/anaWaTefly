@extends('auth.layouts.app')

@section('body')
    <div class="wrapper-page">
        <div class="account-pages">
            <div class="account-box"><!-- Logo box-->
                <div class="account-logo-box">
                    <h2 class="text-uppercase text-center"><a href="index.html" class="text-success">
                            <span>
                                <img src="{{asset('assets/img/logo-name.png')}}" alt="" height="50"
                                     style="margin-top: 17px;">
                                <img src="{{asset('assets/img/logo.png')}}" alt="" height="100">
                            </span>
                        </a>
                    </h2>
                </div>
                <div class="account-content">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email" class="font-weight-medium">
                                Email address
                            </label>
                            <input id="email" type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   name="email" value="{{ old('email') }}" required autofocus
                                   placeholder="Enter your email">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label for="password" class="font-weight-medium">Password</label>
                            <input id="password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <div class="checkbox checkbox-info">
                                <input id="remember" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">Remember me</label>
                            </div>
                        </div>
                        <div class="form-group row text-center">
                            <div class="col-12">
                                <button class="btn btn-block btn-success waves-effect waves-light"
                                        type="submit">دخول
                                </button>
                            </div>
                        </div>
                    </form><!-- end form -->
                </div><!-- end row-->
            </div><!-- end account-content -->
        </div><!-- end account-box -->
    </div><!-- end account-page-->
    </div><!-- end wrapper-page -->
@endsection
