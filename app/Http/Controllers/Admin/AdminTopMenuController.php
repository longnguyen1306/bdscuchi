<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TopMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminTopMenuController extends Controller
{
    public $menus;

    public function __construct(TopMenu $topMenu)
    {
        $this->menus = $topMenu;
    }

    public function index() {
        return view('backend.menus.top-menu.index', [
            'menus' => $this->menus->latest()->paginate(5),
        ]);
    }

    public function create() {
        return view('backend.menus.top-menu.create');
    }

    public function store(Request $request) {
        $request->validate([
           'name' => 'required|min:4|unique:top_menus',
            'link' => 'required|url'
        ]);

        $this->menus->create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'link' => $request->link
        ]);

        toastr()->success('Thêm menu thành công.');
        return redirect()->route('admin.top_menu.index');
    }

    public function edit($id) {
        return view('backend.menus.top-menu.edit', [
            'menu' => $this->menus->findOrFail($id),
        ]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|min:4',
            'link' => 'required|url'
        ]);

        $this->menus->findOrFail($id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'link' => $request->link
        ]);

        toastr()->success('Sửa menu thành công.');
        return redirect()->route('admin.top_menu.index');
    }

    public function destroy($id) {
        $this->menus->findOrFail($id)->delete();

        toastr()->success('XÓa menu thành công.');
        return back();
    }
}
