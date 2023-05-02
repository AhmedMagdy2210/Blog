<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Admin\UserRequest;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller {
    public function index() {
        $users = User::get();
        return view('Admin/user/index', compact('users'));
    }
    public function add() {
        return view('Admin/user/adduser');
    }
    public function store(UserRequest $request) {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rule' => $request->rule
        ]);
        Alert::success('success', 'User added succseefully');
        return redirect(route('admin.user.users'));
    }
}
