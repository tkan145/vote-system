@extends('layouts.page')

@section('content')
<div class="container">
  <div class="py-5 text-center">
    <h2>Login</h2>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="bd-card">
        <form method="POST" action="{{ route('login') }}">
          @csrf

          <div class="form-group row">
              <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
              <div class="col-md-6">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                  @if ($errors->has('email'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

              <div class="col-md-6">
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                  @if ($errors->has('password'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group row form-check">
              <div class="col-md-6 offset-md-4">
                  <div class="checkbox">
                      <label>
                          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                      </label>
                  </div>
              </div>
          </div>

          <div class="form-group row">
            <div class="col-md-8 offset-md-4">
              <button class="btn btn-primary" type="submit">{{ __('Login') }}</button>
              <a class="btn btn-link btn-sm" href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
