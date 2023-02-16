<?php

namespace App\Http\Controllers;

use App\Http\Requests\barangRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Test extends Controller
{

    public function login(barangRequest $request)
    {
        // if (Auth::attempt($request->only('email', 'password'))) {
        //     return redirect('/admin');
        // } else {
        //     return redirect('/login')->with('error', 'Akun yang anda masukkan salah');
        // }

        //validasi
        Request()->validate(
            [
                'email' => 'required|email:rfc,dns',
                'name' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Harap Diisi email',
                'name.required' => 'Harap Diisi username',
                'password.required' => 'Harap Diisi Password',
            ]
        );


        //verifikasi
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/admin');
        } else {
            return redirect('/login');
        }
    }

    public function fungsiRegister(Request $request)
    {

        //validasi
        Request()->validate(
            [
                'email' => 'required|email:rfc,dns|unique:users,email',
                'name' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Harap Diisi email',
                'email.unique' => 'Email telah digunakan',
                'name.required' => 'Harap Diisi username',
                'password.required' => 'Harap Diisi Password',
            ]
        );


        //register akun
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);
        return redirect('/login')->with('message', 'Akun anda telah terdaftar');
    }

    public function logout()
    {
        //logout
        Auth::logout();
        return redirect('/');
    }
}