@extends('layouts.admin_app')
@section('content')
<div class="page-header">
    <h1 class="page-title">Setting Help</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Menu</li>
        <li class="breadcrumb-item"><a href="{{ URL('/setting') }}">Setting Help</a></li>
    </ol>
    <div class="page-header-actions"></div>
</div>
<div class="page-content">
    @if ($message = Session::get('success_admin'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
    <div class="panel">
        <header class="panel-heading">
            <div class="panel-actions"></div>
            <h3 class="panel-title">Data Help</h3>
        </header>
        <div class="panel-body">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label class="form-control-label" for="nama">Text Help</label>
                    <textarea class="form-control" readonly="true">{{ $setting->help_text }}</textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label class="form-control-label" for="nama">Alamat</label>
                    <input type="text" readonly="true" class="form-control" value="{{ $setting->address }}" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label class="form-control-label" for="nama">Email</label>
                    <input type="text" readonly="true" class="form-control" value="{{ $setting->email }}" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label class="form-control-label" for="nama">Telepon</label>
                    <input type="text" readonly="true" class="form-control" value="{{ $setting->telephone_number }}" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label class="form-control-label" for="nama">Handphone / Whatsapp</label>
                    <input type="text" readonly="true" class="form-control" value="{{ $setting->whatsapp_phone_number }}" />
                </div>
            </div>
            <div class="form-group form-material">
                <a class="btn btn-primary" href="{{ URL('setting/edit') }}"><i class="fa fa-pencil"></i> Edit Data</a>
            </div>
        </div>
    </div>
</div>
@endsection