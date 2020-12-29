@extends('frontend.index')
@section('content')
<!-- subheader -->
<section id="subheader" class="subheader_02 dark no-top no-bottom" data-stellar-background-ratio=".2">
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center fadeScroll relative" data-scroll-speed="2">
                    <h2 data-scroll-speed="8">Blog</h2>
                    <div class="small-border"></div>
                    <div class="spacer-double"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- content begin -->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="blog-list">
                <?php $seq_number = 1; ?>
                @foreach ($blog as $row)
                <div class="col-md-6">
                    <div class="post-content">
                        <div class="post-image">
                            <figure class="picframe img-rounded mb20">
                                <a class="image-popup" href="{{ URL('image/blog/'.$row->gambar) }}">
                                    <span class="overlay-v">
                                        <i></i>
                                    </span>
                                </a>
                                <img src="{{ URL('image/blog/'.$row->gambar) }}" class="img-responsive img-rounded" alt="">
                            </figure>
                        </div>

                        <div class="post-wrapper">
                            <div class="date-box">
                                <div class="day"><?= $seq_number ?></div>
                            </div>
                            <div class="post-text">
                                <h3><a href="{{ URL('blog-detail/'.$row->id) }}"><?= $row->judul ?></a></h3>
                                <p><?= substr($row->deskripsi, 0, 100) . "..." ?>.</p>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <?php
                $mod = $seq_number % 2;
                if ($mod == 0) {
                ?>
                    <div class="clearfix"></div>
                <?php } ?>
                <?php $seq_number++; ?>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection