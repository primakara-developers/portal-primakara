@extends('layouts.dashboard-app')
@section('content')
    @component('components.card')
        @slot('breadcrumb_content')
        <li class="active">Welcome Page</li>
        @endslot
        <h3>Selamat datang admin <b>{{ $name }}</b>!</h3>
    @endcomponent
@endsection