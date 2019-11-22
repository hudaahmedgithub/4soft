<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * The class constructor
     */
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    /**
     * Display the customer home page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customer.home');
    }
}