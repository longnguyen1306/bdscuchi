<?php

namespace App\Http\Livewire\SearchHeader;

use App\Models\DanhMucNhaDat;
use App\Models\QuanHuyen;
use Livewire\Component;

class SearchForm extends Component
{
    public $danhMucs;
    public $quanHuyens;

    public function mount(QuanHuyen $quanHuyen, DanhMucNhaDat $danhMucNhaDat) {
        $this->danhMucs = $danhMucNhaDat->where(['status' => 1])->get();
        $this->quanHuyens = $quanHuyen->all();
    }

    public function render()
    {
        return view('livewire.search-header.search-form');
    }
}
