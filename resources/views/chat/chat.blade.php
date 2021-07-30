@extends('layout.app')
@section('content')

<div id="app">
<singlechat-component :reciver_id="{{ $id }}" name="{{ $name->name }}" code="{{ $channel->channel }}" :user="{{ Auth::user() }}" />
</div>

  <script src="{{ asset('js/app.js') }}" defer></script>

@endsection