@extends('layouts.dashboard-app')
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Dashboard</h4>
    </div>
    <div class="col-lg-9 co-md-8 col-sm-8 col-xs-12">
        <ol class="breadcrumb">
            {{ $breadcrumb_content }}
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="white-box">
            {{ $slot }}
        </div>
    </div>
</div>
@endsection