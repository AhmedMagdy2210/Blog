<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller {
    public function index() {
        return view('Admin.login');
    }
    public function login(AuthRequest $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect(route('admin.index'));
        }
        Alert::error('Error', 'User not found');
        return redirect()->back();
    }
    public function logout(Request $request) {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
