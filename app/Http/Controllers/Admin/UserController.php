<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;


class UserController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth:admin');
    }

    
    public function index()
    {
    	$users = User::all();
    	return view('admin.user.index', compact('users'));
    }

    public function create(Request $request)
    {
    	// return view('admin.user.create');

    	User::create([
    		'name' => request('name'),
    		'email' => request('email'),
    		'password'=> Hash::make(request('password')),
    		'type' => request('type'),
    	]);

    	return redirect()->back();
    }

    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update([
            'name' => request('name'),
            'email' => request('email'),
            'type' => request('type')
        ]);

        return redirect()->back();
    }

    public function vendors()
    {
        return view('admin.user.vendors');
    }
}
