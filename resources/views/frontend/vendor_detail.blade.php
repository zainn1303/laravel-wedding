@extends('frontend.index')
@section('content')
<!-- subheader -->
<section id="subheader" class="subheader_02 dark no-top no-bottom" data-stellar-background-ratio=".2">
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center fadeScroll relative" data-scroll-speed="2">
                    <h2 data-scroll-speed="8">{{ $vendor->judul }}</h2>
                    <div class="small-border">
                        {{ $vendor->categorie->deskripsi }}
                    </div>
                    <div class="spacer-double">
                        {{ $vendor->kota->nama }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@if ($message = Session::get('success_add_vendor'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

<!-- content begin -->
<div id="content">
    <div class="container">
        <form method="POST" action="{{ URL('tambah-booking-data') }}">
            @csrf
            <input type="hidden" name="id_vendor" value="<?= $vendor->id; ?>">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <img src="{{ URL('image/vendor/'.$vendor->gambar) }}">
                    </center>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-md-12">
                    <?php echo $vendor->deskripsi; ?>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <?php if (session('id_customer')) { ?>
                            <button class="btn btn-custom" type="submit">Tambahkan ke daftar booking</button>
                        <?php } else { ?>
                            <input class="btn btn-custom" id="login_popup" type="button" value="Tambahkan ke daftar booking" />
                        <?php } ?>
                    </center>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    jQuery("#login_popup").on("click", function() {
        var iteration = $(this).data('iteration') || 1;
        switch (iteration) {
            case 1:
                jQuery('#popup-box').addClass('popup-show');
                jQuery('#popup-box').removeClass('popup-hide');
                break;
            case 2:
                break;
        }
        iteration++;
        if (iteration > 2) iteration = 1;
        $(this).data('iteration', iteration);
    });
</script>
@endsection