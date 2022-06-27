<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegistrationRequest;

class RegisterController extends Controller
{
    public function index()
    {

        if (Auth::check()) {
            return redirect()->intended('dashboard');
        }

        return view('auth.register.index');
    }

    public function create()
    {
        //
    }

    public function store(RegistrationRequest $request)
    {
        //
        if (Auth::check()) {
            return redirect()->intended('dashboard');
        }

        $user = new User();

        $user->name = $request->fullname;
        $user->email = $request->email_input;
        $user->password = Hash::make($request->password);

        $user->save();

        $credentials = [
            'email' => $request->email_input,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }
    }
}
