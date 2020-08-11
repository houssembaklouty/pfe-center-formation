<?php

namespace App\Http\Controllers\Formateur;

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
        $this->middleware('formateur.auth:formateur');
    }

    /**
     * Show the Formateur dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('formateur.home');
    }
}
