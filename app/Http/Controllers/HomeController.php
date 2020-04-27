<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('mgma.auth.login');
        // dd(auth()->user());
        $id = auth()->id();
        if (auth()->guest()) {
            return view('mgma.auth.login');
        } else {
            // return redirect('mgma');
            if ($id == 1) {
                return redirect('mgma');
            } else if ($id == 2) {
                return redirect('factory');
            }
        }
    }
}
