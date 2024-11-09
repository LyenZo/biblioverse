<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'p_surname'=> 'required|string|max:255',
            'm_surname'=> 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        User::create([
            'name' => $request->name,
            'p_surname' => $request->p_surname,
            'm_surname' => $request->m_surname,
            'role' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Usuario registrado exitosamente.');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            if(Auth::user()->role === 'admin'){
                return redirect()->route('home')->with('success', 'Login exitoso.');
            }
            return redirect()->route('home_2')->with('success', 'Login exitoso.');
        }

        return redirect()->back()->withErrors(['email' => 'Credenciales incorrectas.']);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('index');
    }
}