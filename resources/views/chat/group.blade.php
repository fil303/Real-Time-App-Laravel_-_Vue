@extends('layout.app')
@section('content')
<div id="app">
<groupchat-component :user="{{ Auth::user() }}" :group="{{ $group }}"/>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection