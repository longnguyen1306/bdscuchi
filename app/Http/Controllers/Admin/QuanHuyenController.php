<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuanHuyen;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class QuanHuyenController extends Controller
{
    public $quanHuyens;

    public function __construct(QuanHuyen $quanHuyen)
    {
        $this->quanHuyens = $quanHuyen;
    }

    public function index() {
        return view('backend.danh-muc.quan-huyen.index', [
            'quanHuyens' => $this->quanHuyens->latest()->paginate(5),
        ]);
    }

    public function create() {
        return view('backend.danh-muc.quan-huyen.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:4',
        ]);

        $this->quanHuyens->create([
           'name' => $request->name,
           'slug' => Str::slug($request->name)
        ]);

        toastr()->success('Thêm thành công');
        return redirect()->route('admin.quan_huyen.index');
    }

    public function edit($id) {
        return view('backend.danh-muc.quan-huyen.edit', [
            'quanHuyen' => $this->quanHuyens->findOrFail($id),
        ]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|min:4',
        ]);

        $this->quanHuyens->findOrFail($id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        toastr()->success('Sửa thành công');
        return redirect()->route('admin.quan_huyen.index');
    }

    public function destroy($id) {
        $quanHuyen = $this->quanHuyens->findOrFail($id);
        if (count($quanHuyen->phuongXas) == 0) {
            $quanHuyen->delete();
            toastr()->success('Xóa thành công');
            return back();
        } else {
            toastr()->error('Xóa phường, xã trước nha');
            return back();
        }
    }
}
