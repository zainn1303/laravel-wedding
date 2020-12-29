@extends('layouts.admin_app')
@section('content')
<div class="page-header">
    <h1 class="page-title">Testimonial</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Menu</li>
        <li class="breadcrumb-item"><a href="{{ URL('/testimonial') }}">Testimonial</a></li>
    </ol>
    <div class="page-header-actions">
    </div>
</div>
<div class="page-content">
    <!-- Panel Basic -->
    @if ($message = Session::get('success_admin'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
    <div class="panel">
        <header class="panel-heading">
            <div class="panel-actions"></div>
            <h3 class="panel-title">Data Testimonial</h3>
        </header>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-15">
                        <a class="btn btn-success" role="button" href="{{ URL('testimonial/create') }}">
                            <i class="icon md-plus" aria-hidden="true"></i> Tambah Data
                        </a>
                    </div>
                </div>
            </div>
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $seq_number = 1; ?>
                    @foreach($testi as $row)
                    <tr>
                        <td><?= $seq_number; ?></td>
                        <td><?= $row->nama; ?></td>
                        <td><?= substr($row->deskripsi, 0, 100) . "..." ?></td>
                        <td>
                            <a class="btn btn-info" href="{{ URL('testimonial/detail/'.$row->id) }}"><i class="fa fa-info"></i></a>
                            <a class="btn btn-primary" href="{{ URL('testimonial/edit/'.$row->id) }}"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-danger" href="{{ URL('testimonial/delete/'.$row->id) }}"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php $seq_number++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection