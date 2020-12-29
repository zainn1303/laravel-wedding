@extends('frontend.index')
@section('content')
<section id="subheader" class="subheader_02 dark no-top no-bottom" data-stellar-background-ratio=".2">
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center fadeScroll relative" data-scroll-speed="2">
                    <h2 data-scroll-speed="8">Riwayat Booking Customer</h2>
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

                <center>
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Layanan Vendor</th>
                                <th>Kategori Vendor</th>
                                <th>Lokasi Vendor</th>
                                <th>Harga</th>
                                <th>Status</th>
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
                                    @if($row->admin_check_status==1)
                                    <span style="color: green;">{{ 'Data Booking Sudah di Cek.' }}</span>
                                    @else
                                    <span style="color: red;">{{ 'Data Booking Belum di Cek.' }}</span>
                                    @endif
                                </td>
                            </tr>
                            <?php $seq_number++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </center>
            </div>
        </div>
    </div>
</div>
@endsection