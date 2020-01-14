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

    public function create()
    {
        return view('admin.user.create');
    }

    public function save(Request $request)
    {
    	// return view('admin.user.create');

    	$user = User::create([
    		'username' => request('username'),
    		'email' => request('email'),
    		'password'=> Hash::make(request('password')),
    		'type' => request('type'),
    	]);

        UserActivity::addActivity($user->id, 'User Created');

        $request->session()->flash('success', 'User Created successfully');

    	return redirect()->back();
    }

    public function edit($username)
    {

        $user = User::where('username', $username)->get()->first();

        if ($user) {

            $activities = $user->UserActivity;
            return view('admin.user.edit', compact('user', 'activities'));
            
        } else {

            abort(404);
        }

        // return $user;


        // return $activities;
    }

    public function update(Request $request, $username)
    {
        $user = User::where('username', $username)->get()->first();

        // return $request->all();

        $user->update([
            'username' => request('username'),
            'email' => request('email'),
            'type' => request('type'),
            'status' => request('status')
        ]);

         UserActivity::addActivity($user->id, 'User Updated');

        $request->session()->flash('success', 'Success, User updated successfully');

        return redirect()->back();
    }

    public function vendors()
    {
        return view('admin.user.vendors');
    }
}
