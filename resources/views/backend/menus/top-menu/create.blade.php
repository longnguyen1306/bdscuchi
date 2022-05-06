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
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thêm menu</h3>
                        </div>

                        <form action="{{ route('admin.top_menu.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tên <span class="text-danger">(*)</span></label>
                                    <input
                                        type="text"
                                        class="form-control @error('name') is-invalid @enderror"
                                        name="name"
                                        placeholder="Name"
                                        value="{{ old('name') }}"
                                    >
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label>Link: <span class="text-danger">(*)</span></label>
                                    <input
                                        type="text"
                                        class="form-control @error('name') is-invalid @enderror"
                                        name="link"
                                        placeholder="Email"
                                        value="{{ old('link') }}"
                                    >
                                    @error('link') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

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
