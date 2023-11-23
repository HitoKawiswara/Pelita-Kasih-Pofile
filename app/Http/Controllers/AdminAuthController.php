<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    public function getLogin() {
        return view('admin.login');
    }

    public function postLogin(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if(auth()->guard('admin')->attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ])) {
            $user = auth()->guard('admin')->user();
            if($user->is_admin == 1) {
                return redirect()->route('adminDashboard');
            }
            else {
                return back()->with('error', 'Invalid username or password');
            }
        }
    }

    public function adminLogout(Request $request) {
        auth()->guard('admin')->logout();
        Session::flush();
        Session::put('success', 'You have logged out');
        return redirect()->route('adminLogin');
    }
}
