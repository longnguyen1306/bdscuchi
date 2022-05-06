<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PhuongXa;
use App\Models\QuanHuyen;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PhuongXaController extends Controller
{
    public $phuongXas;
    public $quanHuyens;

    public function __construct(PhuongXa $phuongXa, QuanHuyen $quanHuyen)
    {
        $this->phuongXas = $phuongXa;
        $this->quanHuyens = $quanHuyen->all();
    }

    public function index() {
        return view('backend.danh-muc.phuong-xa.index', [
            'phuongXas' => $this->phuongXas->with('quanHuyen')->latest()->paginate(5),
        ]);
    }

    public function create() {
        return view('backend.danh-muc.phuong-xa.create', [
            'quanHuyens' => $this->quanHuyens
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:4',
            'quan_huyen_id' => 'required|numeric'
        ]);

        $this->phuongXas->create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'quan_huyen_id' => $request->quan_huyen_id
        ]);

        toastr()->success('Thêm thành công');
        return redirect()->route('admin.phuong_xa.index');
    }

    public function edit($id) {
        return view('backend.danh-muc.phuong-xa.edit', [
            'quanHuyens' => $this->quanHuyens,
            'phuongXa' => $this->phuongXas->findOrFail($id),
        ]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|min:4',
            'quan_huyen_id' => 'required|numeric'
        ]);

        $this->phuongXas->findOrFail($id)->create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'quan_huyen_id' => $request->quan_huyen_id
        ]);

        toastr()->success('Sửa thành công');
        return redirect()->route('admin.phuong_xa.index');
    }

    public function destroy($id) {
        //check  nhà đất
        toastr()->warning('Kiểm tra nhà đất trước khi xóa');
        return back();
    }
}
