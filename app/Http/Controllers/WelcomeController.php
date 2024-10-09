<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    // public function index(Request $request)
    // {
    //     return view('Welcome');
    // }

    public function __invoke(Request $request)
    {
        // $user =  User::query()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => bcrypt('password'),
        // ]);

        // << mass assignment (usando array) >>
        // $user->update(['password' => 'test'])

        // dump($user);
        // die();

        // Auth::login($user);
        // Auth::logout();

        return view('welcome');
    }
}
