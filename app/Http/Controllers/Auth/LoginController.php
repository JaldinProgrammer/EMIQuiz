<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Binnacle;
use Carbon\Carbon;
class LoginController extends Controller
{
    public function login()
    {
        $credentials =   Request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string']
         ]);
        $remember = request()->filled('remember');
         if(Auth::attempt($credentials, $remember)){
            request()->session()->regenerate();
            return redirect()->route('user.perfil');
         }
         throw ValidationException::withMessages([
            'user' => __('auth.failed')
         ]);
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }

    public function register(){
        return view('user.register');
    }

    public function create(){

        $credentials =   Request()->validate([
            'phone' => ['string'],
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],    
            'password' => ['required', 'string', 'confirmed'],
        ]);
        User::create([
            'phone' => request('phone'),
            'name' => request('name'),
            'email' => request('email'),   
            'password' => Hash::make(request('password')),
        ]);
        return redirect()->route('user.login');
    }

    public function perfil(){
        $user = User::findOrFail(Auth::user()->id);
        return view('user.perfil', compact('user'));
    }
}
