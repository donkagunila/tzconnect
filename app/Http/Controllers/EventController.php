<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Auth;

class EventController extends Controller
{

	public $dir = 'events.';

	/**
     * Only Authenticated users for "admin" guard 
     * are allowed.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function weddings()
    {
    	return view($this->dir.'weddings.index');
    }
}
