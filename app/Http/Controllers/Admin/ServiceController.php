<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use App\Transport;
use App\Mc;
use App\Hall;
use App\Entertainment;

class ServiceController extends Controller
{
    public function index()
    {

    	$services = Service::All();
    	return view('admin.service.index', compact('services'));
    }


    public function transport()
    {
    	$transports = Transport::orderBy('created_at', 'desc')->get();
    	return view('admin.service.transport', compact('transports'));
    }

    public function createtransport()
    {
        return view('admin.service.createtransport');
    }

    public function addtransport(Request $request)
    {


        if (request('image')) {

            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move('uploads/transport/brands', $imageName);

        } else {
            $imageName = null;
        }


        Transport::create([
            'title' => request('title'),
            'type' => request('type'),
            'description' => request('description'),
            'status' => 2,
            'user_id' => 0,
            'brand'   => $imageName,
        ]);

        $request->session()->flash('success', 'Service Created successfully');

        return redirect()->route('admin.service.transport');

    }

    public function enternainment()
    {
    	$entertainments = Entertainment::all();
    	return view('admin.service.entertainment', compact('entertainments'));
    }

    public function mc()
    {
    	$mcs = Mc::all();
    	return view('admin.service.mc', compact('mcs'));
    }

    public function hall()
    {
    	$halls = Hall::all();
    	return view('admin.service.hall', compact('halls'));
    }
}
