<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\UserActivity;


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

    	$user = User::create([
    		'name' => request('name'),
    		'email' => request('email'),
    		'password'=> Hash::make(request('password')),
    		'type' => request('type'),
    	]);

        UserActivity::addActivity($user->id, 'User Created');

    	return redirect()->back();
    }

    public function edit(User $user)
    {

        $activities = $user->UserActivity;

        // return $activities;
        return view('admin.user.edit', compact('user', 'activities'));
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
