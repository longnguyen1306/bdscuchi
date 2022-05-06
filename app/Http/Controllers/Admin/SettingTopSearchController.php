<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SettingTopSearch;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SettingTopSearchController extends Controller
{
    public function config() {
        return view('backend.settings.top-search.config', [
            'topSearchSetting' => SettingTopSearch::first(),
        ]);
    }

    public function update(Request $request) {
        $topSearchSetting = SettingTopSearch::first();

        $data = [
            'title' => $request->title,
            'detail' => $request->detail
        ];

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image'
            ]);

            if (file_exists(public_path($topSearchSetting->image))) {
                unlink(public_path($topSearchSetting->image));
            }

            $image = $request->file('image');
            $fileName = 'Cu-chi-land-banner-'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/settings/banners');

            $imgFile = Image::make($image);
            $imgFile->resize(1920, 1080)->save($destinationPath.'/'.$fileName);
            $data['image'] = '/images/settings/banners/'.$fileName;
        }
        $topSearchSetting->update($data);
        toastr()->success('Cấu hình thành công');
        return back();
    }
}
