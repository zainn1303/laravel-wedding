@extends('layouts.admin_app')
@section('content')
<div class="page-header">
    <h1 class="page-title">Testimonial</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Menu</li>
        <li class="breadcrumb-item">Testimonial</li>
        <li class="breadcrumb-item"><a href="{{ URL('/testimonial/create') }}">Tambah Data</a></li>
    </ol>
    <div class="page-header-actions"></div>
</div>
<div class="page-content">
    <div class="panel">
        <header class="panel-heading">
            <div class="panel-actions"></div>
            <h3 class="panel-title">Formulir Tambah Data</h3>
        </header>
        <div class="panel-body">
            <form method="post" action="{{ URl('testimonial/store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="form-control-label" for="nama">Nama</label>
                        <input type="text" class="form-control <?= ($errors->first('nama') != "") ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="{{ old('nama') }}" />
                        <div class="invalid-feedback">
                            <?= $errors->first('nama'); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-control-label" for="file">Upload Gambar</label>
                        <br />
                        <input type="file" <?= ($errors->first('nama') != "") ? "class='is-invalid'" : ""; ?> id="file" name="file" placeholder="" />
                        <br />
                        <span style="color: red;">*Tipe file harus .jpg|.jpeg|.png</span>
                        <div class="invalid-feedback">
                            <?= $errors->first('file'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label class="form-control-label" for="file">Deskripsi</label>
                        <textarea class="form-control <?= ($errors->first('deskripsi') != "") ? 'is-invalid' : ''; ?>" name="deskripsi">{{ old('deskripsi') }}</textarea>
                        <div class="invalid-feedback">
                            <?= $errors->first('deskripsi'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group form-material">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-warning" href="{{ URL('testimonial') }}">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection