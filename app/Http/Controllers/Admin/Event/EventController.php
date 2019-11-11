<?php

namespace App\Http\Controllers\Admin\Event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function category()
    {
    	return view('admin.event.categories');
    }


    public function index()
    {
    	return view('admin.event.index');
    }
}
