<?php

namespace App\Http\Controllers\authtication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function logout(Request $request)
    {
        try {
            Auth::logout();
    
            $request->session()->invalidate();
            $request->session()->regenerateToken();
    
            Cache::flush();
    
            Session::flush();
    
            return redirect('/');
        } catch (\Exception $e) {
            return redirect('/')->with('error', 'An error occurred during logout.');
        }
    }
}
