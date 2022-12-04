<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __construct() 
    {
        $this->middleware('guest');
    }
    
    public function create()
    {
        return view('auth.register');
    }

    public function store(StoreRegisterRequest $request) {
        $request->validated();
        $user = User::create([
            'name' => request('name'),                      
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
        auth()->login($user);
        $request = request();
        session()->flash('message', 'Registration Successful');
        return redirect('/posts');
    }
}
