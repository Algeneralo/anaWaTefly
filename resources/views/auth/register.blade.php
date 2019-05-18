@extends('auth.layouts.app')

@section('body')
    <div class="account-content">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group mb-3">
                <label for="name" class="font-weight-medium">الاسم</label>
                <div>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                           name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group mb-3">
                <label for="email" class="font-weight-medium">الايميل</label>
                <div>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group mb-3">
                <label for="password" class="font-weight-medium">كلمة المرور</label>
                <div>
                    <input id="password" type="password"
                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                           name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group mb-3">
                <label for="password-confirm"
                       class="font-weight-medium">اعادة كلمة المرور</label>
                <div>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                           required>
                </div>
            </div>
            <div class="form-group mb-3 text-center">
                <div class="col-12">
                    <button class="btn btn-block btn-success waves-effect waves-light"
                            type="submit">تسجيل
                    </button>
                </div>
            </div>
        </form><!-- end form -->
    </div><!-- end mb-3-->
@endsection
