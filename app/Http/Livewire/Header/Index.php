<?php

namespace App\Http\Livewire\Header;

use App\Models\DanhMucNhaDat;
use App\Models\TopMenu;
use Livewire\Component;

class Index extends Component
{
    public $danhMucs;
    public $menus;

    public function mount(DanhMucNhaDat $danhMucNhaDat, TopMenu $topMenu) {
        $this->danhMucs = $danhMucNhaDat->where(['status' => 1])->get();
        $this->menus = $topMenu->latest()->get();
    }

    public function render()
    {
        return view('livewire.header.index');
    }
}
