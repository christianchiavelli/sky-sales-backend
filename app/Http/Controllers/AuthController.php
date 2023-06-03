<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
	public function login()
	{
		return view('auth.login');
	}

	public function register()
	{
		return view('auth.register');
	}

	public function handleLogin(Request $request)
	{
		$credentials = $request->only('email', 'password');
		$remember = $request->has('remember');

		if (Auth::attempt($credentials)) {
			return redirect()->intended('/');
		}
	}

	public function handleRegister(Request $request)
	{
		$validatedData = $request->validate([
			'name' => ['required', 'string', 'max:255'],
			'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
			'password' => ['required', 'string', 'min:8', 'confirmed'],
		]);

		$user = new User;
		$user->name = $validatedData['name'];
		$user->email = $validatedData['email'];
		$user->password = Hash::make($validatedData['password']);
		$user->save();

		Auth::login($user);
		return redirect('/');
	}

	public function logout()
	{
		Auth::logout();
		return redirect('/login');
	}
}