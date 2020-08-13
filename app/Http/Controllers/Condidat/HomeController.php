<?php

namespace App\Http\Controllers\Condidat;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('condidat.auth:condidat');
    }

    /**
     * Show the Condidat dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('condidat.home');
    }
}
