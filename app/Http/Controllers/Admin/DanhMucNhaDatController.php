<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DanhMucNhaDat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DanhMucNhaDatController extends Controller
{
    public $danhMucs;

    public function __construct(DanhMucNhaDat $danhMucNhaDat)
    {
        $this->danhMucs = $danhMucNhaDat;
    }

    public function index() {
        return view('backend.danh-muc.danh-muc-nha-dat.index', [
            'danhMucs' => $this->danhMucs->latest()->paginate(5),
        ]);
    }

    public function create() {
        return view('backend.danh-muc.danh-muc-nha-dat.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:4|unique:danh_muc_nha_dats'
        ]);

        $this->danhMucs->create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => 1,
        ]);

        toastr()->success('Thêm danh mục thành công');
        return redirect()->route('admin.danh_muc_nha_dat.index');
    }

    public function edit($id) {
        return view('backend.danh-muc.danh-muc-nha-dat.edit', [
            'danhMuc' => $this->danhMucs->findOrFail($id),
        ]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|min:4'
        ]);

        $this->danhMucs->findOrFail($id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => 1,
        ]);

        toastr()->success('Sửa danh mục thành công');
        return redirect()->route('admin.danh_muc_nha_dat.index');
    }

    public function destroy($id) {
        $this->danhMucs->findOrFail($id)->delete();

        toastr()->success('Xóa danh mục thành công');
        return back();
    }
}
