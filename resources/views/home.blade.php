@extends('layouts.app')

@section('content')
    <div class="uk-container">

        <div class="uk-card uk-card-default uk-card-body uk-margin-top">
            <h3 class="uk-card-title">Dashboard</h3>

            <div>
                You are logged in!
            </div>

        </div>

        {{ $items->links() }}

        {{ $simples->links() }}

    </div>
@endsection
