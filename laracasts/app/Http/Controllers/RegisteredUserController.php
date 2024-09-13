<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{

    public function index() {}

    public function create()
    {
        return view('auth.register');
    }

    public function store(Request   $request)
    {
        $attributes =  request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(6), 'confirmed'],
        ]);

        $user = User::create($attributes);

        Auth::login($user);

        return redirect(('/jobs'));
    }


    public function show(User $user) {}

    public function edit(User $user) {}


    public function update(Request $request, User $user) {}


    public function destroy(User $user) {}
}
