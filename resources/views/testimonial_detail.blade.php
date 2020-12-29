@extends('layouts.admin_app')
@section('content')
<div class="page-header">
    <h1 class="page-title">Testimonial</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Menu</li>
        <li class="breadcrumb-item">Testimonial</li>
        <li class="breadcrumb-item"><a href="{{ URL('/testimonial/detail/'.$testi->id) }}">Detail Data</a></li>
    </ol>
    <div class="page-header-actions"></div>
</div>
<div class="page-content">
    <div class="panel">
        <header class="panel-heading">
            <div class="panel-actions"></div>
            <h3 class="panel-title">Detail Data</h3>
        </header>
        <div class="panel-body">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label class="form-control-label" for="nama">Nama</label>
                    <input type="text" readonly="true" class="form-control" value="{{ $testi->nama }}" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label class="form-control-label" for="deskripsi">Gambar</label>
                    <div>
                        <img class="img-responsive" src="{{ URL('image/testi/'.$testi->gambar) }}" style="width: 250px;">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label class="form-control-label" for="deskripsi">Deskripsi</label>
                    <textarea readonly="true" class="form-control">{{ $testi->deskripsi }}</textarea>
                </div>
            </div>
            <div class="form-group form-material">
                <a class="btn btn-warning" href="{{ URL('testimonial') }}">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection