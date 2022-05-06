<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AdminUserController extends Controller
{
    public $users;

    public function __construct(User $user)
    {
        $this->users = $user;
    }

    public function index() {
        return view('backend.nguoi-dung-va-quyen.danh-sach-nguoi-dung.index', [
            'users' => $this->users->latest()->paginate(5),
        ]);
    }

    public function edit($id) {
        return view('backend.nguoi-dung-va-quyen.danh-sach-nguoi-dung.edit', [
            'user' => $this->users->findOrFail($id)
        ]);
    }

    public function update(Request $request, $id) {
        $user = $this->users->findOrFail($id);
        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'phone' => 'required|numeric',
        ]);
        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
        ];

        if ($request->hasFile('avatar')) {
            $request->validate([
                "avatar" => 'image|mimes:jpg,jpeg,png,gif,svg'
            ]);
            if ($user->avatar) {
                if (file_exists(public_path($user->avatar))) {
                    unlink(public_path($user->avatar));
                }
            }

            $image = $request->file('avatar');
            $fileName = 'Cu-chi-land-avatar-'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/settings/users');

            $imgFile = Image::make($image);
            $imgFile->resize(100, 100)->save($destinationPath.'/'.$fileName);
            $data['avatar'] = '/images/settings/users/'.$fileName;
        }
       if ( $user->update($data)) {
           toastr()->success('Sửa thàng công');
           return redirect()->route('admin.nguoi_dung.index');
       } else {
           toastr()->error('Có lỗi');
           return back();
       }
    }
}
