@extends('layouts.admin_app')
@section('content')
<div class="page-header">
    <h1 class="page-title">Data Booking</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Menu</li>
        <li class="breadcrumb-item"><a href="{{ URL('/booking') }}">Data Booking</a></li>
    </ol>
    <div class="page-header-actions"></div>
</div>
<div class="page-content">
    <!-- Panel Basic -->
    @if ($message = Session::get('success_admin'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
    <div class="panel">
        <header class="panel-heading">
            <div class="panel-actions"></div>
            <h3 class="panel-title">Data Booking Baru</h3>
        </header>
        <div class="panel-body">
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Vendor</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $seq_number = 1; ?>
                    @foreach($booking_baru as $row)
                    <tr>
                        <td>{{ $seq_number }}</td>
                        <td>{{ $row->customer->nama_lengkap }}</td>
                        <td>{{ $row->vendor->judul }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ URL('booking/edit/'.$row->id) }}"><i class="fa fa-pencil"></i></a>
                        </td>
                    </tr>
                    <?php $seq_number++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="panel">
        <header class="panel-heading">
            <div class="panel-actions"></div>
            <h3 class="panel-title">Data Booking Sudah Cek</h3>
        </header>
        <div class="panel-body">
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Vendor</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $seq_number = 1; ?>
                    @foreach($booking_sudah as $row1)
                    <tr>
                        <td>{{ $seq_number }}</td>
                        <td>{{ $row1->customer->nama_lengkap }}</td>
                        <td>{{ $row1->vendor->judul }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ URL('booking/detail/'.$row1->id) }}"><i class="fa fa-info"></i></a>
                        </td>
                    </tr>
                    <?php $seq_number++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection