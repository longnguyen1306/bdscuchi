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
                            <h3 class="card-title">Cấu hình Top Search</h3>
                        </div>

                        <form action="{{ route('admin.top_search.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="title"
                                        placeholder="Name"
                                        value="{{ old('title', $topSearchSetting->title) }}"
                                    >
                                </div>
                                <div class="form-group">
                                    <label>Detail: </label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="detail"
                                        value="{{ old('detail', $topSearchSetting->detail) }}"
                                    >

                                </div>
                                <div class="form-group">
                                    <label for="customFile">Ảnh nền:  <span class="text-danger">(*)</span></label>

                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input @error('image') is-invalid @enderror" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="form-group">
                                    <img src="{{ asset($topSearchSetting->image) }}" style="width: 250px;height: auto">
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
