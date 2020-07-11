<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomerContact;

class CustomerController extends Controller
{
	public function index()
	{
		$customers = CustomerContact::all();
	}
}