@extends('frontend.index')
@section('content')
<!-- subheader -->
<section id="subheader" class="subheader_02 dark no-top no-bottom" data-stellar-background-ratio=".2">
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center fadeScroll relative" data-scroll-speed="2">
                    <h2 data-scroll-speed="8">Help</h2>
                    <div class="small-border"></div>
                    <div class="spacer-double"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- content begin -->
<div id="content" class="no-top no-bottom">
    <!-- section begin -->
    <section id="explore-1" class="side-bg">
        <div class="col-md-5 image-container wow fadeInLeft">
            <div class="background-image" style="background-image: url('{{ URL('image/all/customer_service.jpg') }}');"></div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-6 pt40 pb40">
                    <h2 class="s1">Ada yang bisa kami bantu?</h2>
                    <p><?= $help->help_text ?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="explore-2" class="side-bg right" data-bgcolor="#f5f5f5">
        <div class="col-md-5 image-container wow fadeInRight">
            <div class="background-image" style="background-image: url('{{ URL('image/all/contact_us.jpg') }}');"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 pt40 pb40">
                    <h2 class="s1">Kontak kami</h2>
                    <p>
                        Alamat : <?= $help->address ?>
                        <br />
                        Email : <?= $help->email ?>
                        <br />
                        Telepon : <?= $help->telephone_number ?>
                        <br />
                        Handphone / Whatsapp : <?= $help->whatsapp_phone_number ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->
</div>
<!-- subheader close -->
@endsection