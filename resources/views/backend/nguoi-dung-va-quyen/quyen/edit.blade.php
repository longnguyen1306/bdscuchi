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
                            <h3 class="card-title">Sửa người dùng</h3>
                        </div>

                        <form action="{{ route('admin.nguoi_dung.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tên <span class="text-danger">(*)</span></label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        placeholder="Name"
                                        value="{{ old('name', $user->name) }}"
                                    >
                                </div>
                                <div class="form-group">
                                    <label>Email <span class="text-danger">(*)</span></label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        name="email"
                                        placeholder="Email"
                                        value="{{ old('email', $user->email) }}"
                                    >
                                </div>

                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="phone"
                                        placeholder="Số điện thoại"
                                        value="{{ old('phone', $user->phone) }}"
                                    >
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Ảnh đại diện</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="avatar" class="custom-file-input">
                                            <label class="custom-file-label" >Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                @if($user->avatar)
                                <div class="form-group">
                                    <img src="{{ asset($user->avatar) }}" style="width: 200px; height: 200px">
                                </div>
                                @endif
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
