<?php

namespace App\Http\Controllers;

use App\Http\Requests\Frontend\SendContactRequest;
use App\Http\Requests\Frontend\StoreContactRequest;
use App\Models\CustomerContact;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function saveContact(StoreContactRequest $request)
    {
    	$customer = CustomerContact::create([
    		'name' => $request->input('name'),
    	    'email' => $request->input('email'),
		    'phone' => $request->input('phone'),
		    'note' => $request->input('note'),
	    ]);

    	return response()->json($customer);

    }
}
