@extends('frontend.index')
@section('content')
<section id="subheader" class="subheader_02 dark no-top no-bottom" data-stellar-background-ratio=".2">
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center fadeScroll relative" data-scroll-speed="2">
                    <h2 data-scroll-speed="8">Data Booking Customer</h2>
                    <div class="small-border"></div>
                    <div class="spacer-double"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="content">
    <div class="container">
        <div class="row">
            <div class=" col-md-12">

                @if ($message = Session::get('success_booking_data'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif

                <center>
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Layanan Vendor</th>
                                <th>Kategori Vendor</th>
                                <th>Lokasi Vendor</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $seq_number = 1; ?>
                            @foreach($booking as $row)
                            <tr>
                                <td><?= $seq_number; ?></td>
                                <td>{{ $row->vendor->judul }}</td>
                                <td>{{ $row->vendor->categorie->deskripsi }}</td>
                                <td>{{ $row->vendor->kota->nama }}</td>
                                <td>{{ $row->total_harga }}</td>
                                <td>
                                    <a href="{{ URL('hapus-booking-customer/'.$row->id) }}">Hapus</a>
                                </td>
                            </tr>
                            <?php $seq_number++; ?>
                            @endforeach
                        </tbody>
                    </table>
                    <br />
                    <br />
                    <a href="{{ URL('apply-booking-customer') }}" class="btn btn-custom">Apply Data Booking</a>
                </center>
            </div>
        </div>
    </div>
</div>
@endsection