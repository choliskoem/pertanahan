<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {

        return view('pages.auth.login');
    }
    public function proses_login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/home');
        } else {
            return redirect('/')->with('error', 'Login Gagal');
        }

        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function showChangePasswordForm()
    {
        return view('pages.auth.reset');
    }

    public function changePassword(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        // Cek apakah kata sandi saat ini cocok
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return back()->withErrors(['error' => 'Kata sandi saat ini salah.']);
        }

        // Update kata sandi
        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();

        // return redirect()->back()->with('success', 'Data berhasil disimpan!');
        return redirect()->route('home')->with('success', 'Kata sandi berhasil diubah.');
    }
}
