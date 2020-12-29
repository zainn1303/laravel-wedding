@extends('frontend.index')
@section('content')
<!-- subheader -->
<section id="subheader" class="subheader_02 dark no-top no-bottom" data-stellar-background-ratio=".2">
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center fadeScroll relative" data-scroll-speed="2">
                    <h2 data-scroll-speed="8">Vendor {{ $categorie->deskripsi }}</h2>
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
                @forelse ($vendor as $row)
                <?php if ($seq_number == 1) { ?>
                    <div class="col-md-4">
                        <div class="item pricing">
                            <div class="pricing-s1 mb30">
                                <div class="top">
                                    <h2 class="s1">FIlter</h2>
                                </div>
                                <form method="POST" action="{{ URL('vendor/'.$categorie->id) }}">
                                    @csrf
                                    <div class="bottom">
                                        <ul>
                                            <li>
                                                <center>
                                                    <div class="form-group">
                                                        <label>Kota</label>
                                                        <select class="form-control" name="kota">
                                                            <option value="-">--- Semua Kota ---</option>
                                                            @foreach($kota as $kot)
                                                            <option value="<?= $kot->id; ?>" <?= ($kota_select == $kot->id) ? "selected='true'" : ""; ?>><?= $kot->nama; ?></option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </center>
                                            </li>
                                        </ul>
                                        <button type="submit" class="btn btn-custom" style="margin: 20px;">Submit</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="col-md-4"></div>
                <?php } ?>
                <div class="col-md-4" <?= ($seq_number % 2 == 0) ? "style='bottom:20px;'" : ""; ?>>
                    <div class="post-content">
                        <div class="post-image">
                            <figure class="picframe img-rounded mb30">
                                <a class="image-popup" href="{{ URL('image/vendor/'.$row->gambar) }}">
                                    <span class="overlay-v">
                                        <i></i>
                                    </span>
                                </a>
                                <img src="{{ URL('image/vendor/'.$row->gambar) }}" class="img-responsive img-rounded" alt="">
                            </figure>
                        </div>

                        <div class="post-wrapper">
                            <div class="date-box">
                                <div class="day"><?= $seq_number ?></div>
                            </div>
                            <div class="post-text">
                                <h3><a href="{{ URL('vendor-detail/'.$row->id) }}"><?= $row->judul ?></a></h3>
                                <p>
                                    <?= "Harga : Rp. " . $row->harga; ?>
                                    <br />
                                    <?= "Lokasi : " . $row->kota->nama; ?>
                                </p>
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
                @empty
                <div class="col-md-4">
                    <div class="item pricing">
                        <div class="pricing-s1 mb30">
                            <div class="top">
                                <h2 class="s1">FIlter</h2>
                            </div>
                            <form method="POST" action="{{ URL('vendor/'.$categorie->id) }}">
                                @csrf
                                <div class="bottom">
                                    <ul>
                                        <li>
                                            <center>
                                                <div class="form-group">
                                                    <label>Kota</label>
                                                    <select class="form-control" name="kota">
                                                        <option value="-">--- Semua Kota ---</option>
                                                        @foreach($kota as $kot)
                                                        <option value="<?= $kot->id; ?>" <?= ($kota_select == $kot->id) ? "selected='true'" : ""; ?>><?= $kot->nama; ?></option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </center>
                                        </li>
                                    </ul>
                                    <button type="submit" class="btn btn-custom">Submit</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <center>
                        <h1>
                            <p>Tidak ada data.</p>
                        </h1>
                    </center>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection