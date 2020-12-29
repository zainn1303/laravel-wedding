@extends('layouts.admin_app')
@section('content')
<div class="page-header">
    <h1 class="page-title">Data Booking</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Menu</li>
        <li class="breadcrumb-item">Data Booking</li>
        <li class="breadcrumb-item"><a href="{{ URL('/booking/edit/'.$booking->id) }}">Edit Data</a></li>
    </ol>
    <div class="page-header-actions"></div>
</div>
<div class="page-content">
    <div class="panel">
        <header class="panel-heading">
            <div class="panel-actions"></div>
            <h3 class="panel-title">Edit Data</h3>
        </header>
        <div class="panel-body">
            <form method="POST" action="{{ URL('booking/update') }}">
                @csrf
                <input type="hidden" name="id" value="{{ $booking->id }}">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label class="form-control-label" for="nama">Nama Layanan</label>
                        <div>
                            <p><b><?php echo $booking->vendor->judul; ?></b></p>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="form-control-label" for="nama">Deskripsi Layanan</label>
                        <div>
                            <?php echo $booking->vendor->deskripsi; ?>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label class="form-control-label" for="nama">Nama Customer</label>
                        <input type="text" readonly="true" class="form-control" value="{{ $booking->customer->nama_lengkap }}" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-control-label" for="nama">Telepon Customer</label>
                        <input type="text" readonly="true" class="form-control" value="{{ $booking->customer->telepon }}" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-control-label" for="nama">Email Customer</label>
                        <input type="text" readonly="true" class="form-control" value="{{ $booking->customer->email }}" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label class="form-control-label" for="nama">Kategori Vendor</label>
                        <input type="text" readonly="true" class="form-control" value="{{ $booking->vendor->categorie->deskripsi }}" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-control-label" for="nama">Lokasi Vendor</label>
                        <input type="text" readonly="true" class="form-control" value="{{ $booking->vendor->kota->nama }}" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-control-label" for="nama">Harga Vendor</label>
                        <input type="text" readonly="true" class="form-control" value="{{ $booking->vendor->harga }}" />
                    </div>
                </div>
                <div class="form-group form-material">
                    <button class="btn btn-primary" type="submit">Tandai sebagai sudah di cek</button>
                    <a class="btn btn-warning" href="{{ URL('booking') }}">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection