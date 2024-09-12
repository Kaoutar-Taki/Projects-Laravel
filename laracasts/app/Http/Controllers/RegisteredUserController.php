<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{

    public function index() {}

    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        return dd(request()->all());
    }


    public function show(User $user) {}

    public function edit(User $user) {}


    public function update(Request $request, User $user) {}


    public function destroy(User $user) {}
}
