@extends('layouts.app')

@section('content')
  <div class="uk-container uk-container-center uk-width-1-2">
    <div class="uk-panel uk-panel-box uk-panel-header">
      <h3 class="uk-panel-title">Reset Password</h3>

      <div>
        <form class="uk-form uk-form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
          {{ csrf_field() }}

          <input type="hidden" name="token" value="{{ $token }}">

          <div class="uk-form-row">
            <label for="email" class="uk-form-label">E-Mail Address</label>

            <div class="uk-form-controls">
              <input id="email" type="email" name="email" value="{{ $email or old('email') }}"
                     class="uk-form-width-large{{ $errors->has('email') ? ' uk-form-danger' : '' }}">

              @if ($errors->has('email'))
                <div class="uk-form-help-block uk-text-danger">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>
          </div>

          <div class="uk-form-row">
            <label for="password" class="uk-form-label">Password</label>

            <div class="uk-form-controls">
              <input id="password" type="password" name="password"
                     class="uk-form-width-large{{ $errors->has('password') ? ' uk-form-danger' : '' }}">

              @if ($errors->has('password'))
                <div class="uk-form-help-block uk-text-danger">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
          </div>

          <div class="uk-form-row">
            <label for="password-confirm" class="uk-form-label">Confirm Password</label>

            <div class="uk-form-controls">
              <input id="password-confirm" type="password" name="password_confirmation"
                     class="uk-form-width-large{{ $errors->has('password_confirmation') ? ' uk-form-danger' : '' }}">

              @if ($errors->has('password_confirmation'))
                <div class="uk-form-help-block uk-text-danger">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </div>
              @endif
            </div>
          </div>

          <div class="uk-form-row">
            <div class="uk-form-controls">
              <button type="submit" class="uk-button uk-button-primary">
                Reset Password
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
