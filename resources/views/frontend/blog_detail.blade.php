@extends('frontend.index')
@section('content')
<!-- subheader -->
<section id="subheader" class="subheader_02 dark no-top no-bottom" data-stellar-background-ratio=".2">
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center fadeScroll relative" data-scroll-speed="2">
                    <h2 data-scroll-speed="8">Detail Blog</h2>
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
            <div class="col-md-12">
                <h1><b><?= $blog->judul; ?></b></h1>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-12">
                <?php
                $user = \App\User::where(["id" => $blog->id_user])->first();
                ?>
                <?= "Oleh : " . $user->name . ", " . $blog->created_at; ?>
            </div>
        </div>
        <br />
        <br />
        <div class="row">
            <div class="col-md-12">
                <center>
                    <img src="{{ URL('image/blog/'.$blog->gambar) }}">
                </center>
            </div>
        </div>
        <br />
        <br />
        <div class="row">
            <div class="col-md-12">
                <?php echo  $blog->deskripsi; ?>
            </div>
        </div>
    </div>
</div>

@endsection