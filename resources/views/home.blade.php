@extends('layouts.app')

@section('content')
  <div class="uk-container uk-container-center">

    <div class="uk-panel uk-panel-box uk-panel-header">
      <h3 class="uk-panel-title">Dashboard</h3>

      <div>
        You are logged in!
      </div>

    </div>

    {{ $items->links() }}

  </div>
@endsection
