@extends('layouts.admin')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Phường, xã</h1>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <a href="{{ route('admin.phuong_xa.create') }}" class="btn btn-primary btn-sm">Thêm <i class="fas fa-plus"></i></a>
                            </h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Slug</th>
                                    <th>Quận, huyện</th>
                                    <th>Số nhà đất</th>
                                    <th>Ngày tạo</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($phuongXas as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td>{{  $item->quanHuyen->name }}</td>
                                    <td>0</td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.phuong_xa.edit', $item->id) }}" @popper(Sửa)><i class="fas fa-pencil-alt"></i></a>
                                        <a href="{{ route('admin.phuong_xa.destroy', $item->id) }}" @popper(Xóa) class="ml-1" onclick="return confirm('Bạn chắc chắn?')"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                {{ $phuongXas->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
