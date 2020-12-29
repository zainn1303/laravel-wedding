@extends('layouts.admin_app')
@section('content')
<div class="page-header">
    <h1 class="page-title">Home</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Menu</li>
        <li class="breadcrumb-item"><a href="{{ URL('/') }}">Home</a></li>
    </ol>
    <div class="page-header-actions">
    </div>
</div>
<div class="page-content">
    <!-- Panel Basic -->
    <div class="panel">
        <header class="panel-heading">
            <div class="panel-actions"></div>
            <h3 class="panel-title"></h3>
        </header>
        <div class="panel-body">
            <h1>Selamat Datang {{ Auth::user()->name }}.</h1>
            <br />
            <div>
                <p>Jangan lupa logout setelah memakai sistem ini.</p>
            </div>
        </div>
    </div>
</div>
@endsection