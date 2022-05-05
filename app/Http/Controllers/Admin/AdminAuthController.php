<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminAuthController extends Controller
{
    public function login() {
        if (Auth::check()) {
            return redirect()->route('admin.index');
        } else {
            return view('backend.auth.login');
        }
    }

    public function loginSubmit(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'pass' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            toastr()->error('Email, mật khẩu không hợp lệ');
            return back();
        } else {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->pass])) {
                toastr()->success('Chào mừng bạn !');
                return redirect()->route('admin.index');
            } else {
                toastr()->error('Email, mật khẩu đúng');
                return back();
            }
        }
    }

    public function logout() {
        if (Auth::check()) {
            Auth::logout();
            toastr()->success('Tạm biệt ....');
            return redirect()->route('admin.login');
        }
        return redirect()->route('admin.index');
    }
}
