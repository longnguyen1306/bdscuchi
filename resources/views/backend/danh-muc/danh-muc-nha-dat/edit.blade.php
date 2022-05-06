@extends('layouts.admin')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Simple Tables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Simple Tables</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Sửa danh mục nhà đất</h3>
                        </div>

                        <form action="{{ route('admin.danh_muc_nha_dat.update', $danhMuc->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tên <span class="text-danger">(*)</span></label>
                                    <input
                                        type="text"
                                        class="form-control @error('name') is-invalid @enderror"
                                        name="name"
                                        placeholder="Name"
                                        value="{{ old('name', $danhMuc->name) }}"
                                    >
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
