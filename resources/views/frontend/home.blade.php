@extends('frontend.index')
@section('content')
<!-- section begin -->
<section id="section-hero" class="full-height relative text-light z1 owl-slide-wrapper" data-stellar-background-ratio=".2">
    <div class="owl-slider-nav">
        <div class="next"></div>
        <div class="prev"></div>
    </div>

    <div class="center-y fadeScroll text-center relative" data-scroll-speed="4">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <img src="{{ URL('css-js-frontend/images_02/logo-big.png') }}" class="img-responsive img-auto" alt="">
                    <div class="spacer-double"></div>
                    <h1 class='s2'>Serena Laurie</h1>
                    <h4 class='s3'>Wedding Website</h4>
                    <div class="spacer-double"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="custom-owl-slider" class="owl-slide" data-scroll-speed="2">
        <div class="item">
            <img src="{{ URL('css-js-frontend/images_02/slider/1.jpg') }}" alt="">
        </div>
        <div class="item">
            <img src="{{ URL('css-js-frontend/images_02/slider/2.jpg') }}" alt="">
        </div>
    </div>
</section>
<!-- section close -->


<!-- section begin -->
<section id="section-about">
    <div class="container">
        <div class="row text-center">

            <div class="col-md-8 col-md-offset-2">
                <h2 class="s1">Selamat Datang</h2>
                <div class="small-border"></div>
            </div>

            <div class="spacer-single"></div>

            <div class="col-md-4">
                <i class="icon-chat id-color mb20 size40"></i>
                <h4>Konsultasi</h4>
                <p>Konsultasi mengenai beberapa planning event pernikahan.</p>
            </div>

            <div class="col-md-4">
                <i class="icon-map id-color mb20 size40"></i>
                <h4>Paket Pernikahan</h4>
                <p>Paket Pernikahan lengkap dari vendor kami, dengan kualtias dan pelayanan terbaik dengan harga yang bervariatif.</p>
            </div>

            <div class="col-md-4">
                <i class="icon-calendar id-color mb20 size40"></i>
                <h4>Mudah Booking</h4>
                <p>Proses booking yang mudah sehingga memudahkan pengguna.</p>
            </div>

            <div class="spacer-double"></div>
        </div>
    </div>
</section>
<!-- section close -->

<!-- section begin -->
<section id="explore-1" class="side-bg">
    <div class="col-md-5 image-container wow fadeInLeft">
        <div class="background-image"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-6 pt40 pb40">
                <h2 class="s1">Siapa Kami</h2>
                <p>Kami merupakan Direktori Vendor Pernikahan & Website Wedding Planner / Organizer yang membantu User dalam menyiapkan Pernikahan menjadi mudah.</p>
            </div>
        </div>
    </div>
</section>
<!-- section close -->

<!-- section begin -->
<section id="explore-2" class="side-bg right" data-bgcolor="#f5f5f5">
    <div class="col-md-5 image-container wow fadeInRight">
        <div class="background-image"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 pt40 pb40">
                <h2 class="s1">Vendor Kami</h2>
                <p>Banyak Vendor yang telah bekerja sama dengan kami, mulai dari layanan paket pernkahan lengkap, dekorasi, catering, make up, busana, foto dan video, souvenir, MC sampai Honeymoon atau bulan madu, yang masing-masing memberikan pelayanan terbaik dan harga yang bervariatif.</p>
            </div>
        </div>
    </div>
</section>
<!-- section close -->

<!-- section begin -->
<section id="section-services" class="text-light" data-bgcolor="#b28f1d">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="s1">Layanan</h2>
                <div class="small-border"></div>
            </div>

            <div class="col-md-3 text-center">
                <img src="{{ URL('css-js-frontend/images_02/services/2.jpg') }}" alt="" class="img-circle mb30" />
                <h4>Paket Pernikahan</h4>
                Ada beberapa paket pernikahan lengkap dengan biaya terjangkau.
            </div>

            <div class="col-md-3 text-center">
                <img src="{{ URL('css-js-frontend/images_02/services/3.jpg') }}" alt="" class="img-circle mb30" />
                <h4>Dekorasi</h4>
                Tarif dekorasi dari yang murah hingga mahal, namun dengan kualitas yang sama rata baik dan tidak mengecewakan.
            </div>

            <div class="col-md-3 text-center">
                <img src="{{ URL('css-js-frontend/images_02/services/1.jpg') }}" alt="" class="img-circle mb30" />
                <h4>Make Up</h4>
                Layanan make up terbaik dari beberapa vendor.
            </div>

            <div class="col-md-3 text-center">
                <img src="{{ URL('css-js-frontend/images_02/services/4.jpg') }}" alt="" class="img-circle mb30" />
                <h4>Dan Lain-lain</h4>
                Masih banyak lagi layanana yang bisa anda akses pada website ini.
            </div>
        </div>
    </div>
</section>


<!-- section begin -->
<section id="section-latest-wedding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="s1">Testimonial</h2>
                <div class="small-border"></div>
            </div>

            <div id="testimonial-carousel-3" class="de_carousel" data-wow-delay=".3s">
                @foreach ($testimonial as $testi)
                <div class="col-md-6 item">
                    <div class="de_testi opt-3">
                        <figure class="pic-hover img-rounded hover-scale mb30">
                            <img src="{{ URL('image/testi/'.$testi->gambar) }}" class="img-responsive" alt="">
                        </figure>
                        <blockquote>
                            <p><?= $testi->deskripsi; ?></p>
                            <div class="de_testi_by">
                                <?= $testi->nama ?>
                            </div>
                        </blockquote>

                    </div>
                </div>
                @endforeach
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</section>
<!-- section close -->
@endsection