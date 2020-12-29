@extends('layouts.admin_app')
@section('content')
<div class="page-header">
    <h1 class="page-title">Setting Help</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Menu</li>
        <li class="breadcrumb-item">Setting Help</li>
        <li class="breadcrumb-item"><a href="{{ URL('/setting/edit') }}">Edit Help</a></li>
    </ol>
    <div class="page-header-actions"></div>
</div>
<div class="page-content">
    <div class="panel">
        <header class="panel-heading">
            <div class="panel-actions"></div>
            <h3 class="panel-title">Data Help</h3>
        </header>
        <div class="panel-body">
            <form method="POST" action="{{ URL('setting/update') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label class="form-control-label" for="nama">Text Help</label>
                        <textarea class="form-control" name="help_text">{{ $setting->help_text }}</textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label class="form-control-label" for="nama">Alamat</label>
                        <input type="text" class="form-control" value="{{ $setting->address }}" name="address" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label class="form-control-label" for="nama">Email</label>
                        <input type="text" class="form-control" value="{{ $setting->email }}" name="email" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label class="form-control-label" for="nama">Telepon</label>
                        <input type="text" class="form-control" value="{{ $setting->telephone_number }}" name="telephone_number" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label class="form-control-label" for="nama">Handphone / Whatsapp</label>
                        <input type="text" class="form-control" value="{{ $setting->whatsapp_phone_number }}" name="whatsapp_phone_number" />
                    </div>
                </div>
                <div class="form-group form-material">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <a class="btn btn-warning" href="{{ URL('setting') }}">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection