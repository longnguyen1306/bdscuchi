<?php

namespace App\Http\Livewire\SearchHeader;

use App\Models\SettingTopSearch;
use Livewire\Component;

class Index extends Component
{
    public $searchSetting;

    public function mount(SettingTopSearch $settingTopSearch) {
        $this->searchSetting = $settingTopSearch->first();
    }

    public function render()
    {
        return view('livewire.search-header.index');
    }
}
