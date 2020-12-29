@extends('frontend.index')
@section('content')
<!-- subheader -->
<section id="subheader" class="subheader_02 dark no-top no-bottom" data-stellar-background-ratio=".2">
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center fadeScroll relative" data-scroll-speed="2">
                    <h2 data-scroll-speed="8">Register Akun Customer</h2>
                    <div class="small-border"></div>
                    <div class="spacer-double"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section begin -->
<section id="section-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <form name="contactForm" id='contact_form' method="post" action="{{ URL('register-customer') }}">
                        @csrf
                        <div class="col-md-12">

                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                            @endif

                            <center>
                                <h2>Silahkan masukkan data anda</h2>
                            </center>
                            <br />
                            <div class="field-set">
                                <input type='text' name='nama_lengkap' id='nama_lengkap' class="form-control" placeholder="Nama Lengkap" value="{{ old('nama_lengkap') }}">
                                <div class="line-fx">
                                    {{ $errors->first('nama_lengkap') }}
                                </div>
                            </div>

                            <div class="field-set">
                                <input type='text' name='telepon' id='telepon' class="form-control" placeholder="Nomor Telepon" value="{{ old('telepon') }}">
                                <div class="line-fx">
                                    {{ $errors->first('telepon') }}
                                </div>
                            </div>

                            <div class="field-set">
                                <input type='text' name='email' id='email' class="form-control" placeholder="Email" value="{{ old('email') }}">
                                <div class="line-fx">
                                    {{ $errors->first('email') }}
                                </div>
                            </div>

                            <div class="field-set">
                                <input type='text' name='username' id='username' class="form-control" placeholder="Username" value="{{ old('username') }}">
                                <div class="line-fx">
                                    {{ $errors->first('username') }}
                                </div>
                            </div>

                            <div class="field-set">
                                <input type='password' name='password' id='password' class="form-control" placeholder="Password" style="color:black;">
                                <div class="line-fx">
                                    {{ $errors->first('password') }}
                                </div>
                            </div>
                            <br />
                            <div class="field-set">
                                <input type='password' name='password_konfirmasi' id='password_konfirmasi' class="form-control" placeholder="Konfirmasi Password" style="color:black;">
                                <div class="line-fx">
                                    {{ $errors->first('password_konfirmasi') }}
                                </div>
                            </div>
                        </div>
                        <div class="spacer-single"></div>
                        <div class="col-md-12">
                            <div id='submit'>
                                <center>
                                    <input type='submit' value='Submit' class="btn btn-custom">
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection