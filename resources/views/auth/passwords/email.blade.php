@extends('layouts.app')

<!-- Main Content -->
@section('content')
  <div class="uk-container uk-container-center uk-width-1-2">
    <div class="uk-panel uk-panel-box uk-panel-header">
      <h3 class="uk-panel-title">Reset Password</h3>

      <div>
        @if (session('status'))
          <div class="uk-alert uk-alert-success">
            {{ session('status') }}
          </div>
        @endif

        <form class="uk-form uk-form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
          {{ csrf_field() }}

          <div class="uk-form-row">
            <label for="email" class="uk-form-label">E-Mail Address</label>

            <div class="uk-form-controls">
              <input id="email" type="email" name="email" value="{{ old('email') }}"
                     class="uk-form-width-large{{ $errors->has('email') ? ' uk-form-danger' : '' }}">

              @if ($errors->has('email'))
                <div class="uk-form-help-block uk-text-danger">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>
          </div>

          <div class="uk-form-row">
            <div class="uk-form-controls">
              <button type="submit" class="uk-button uk-button-primary">
                Send Password Reset Link
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
