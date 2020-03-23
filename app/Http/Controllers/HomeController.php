<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
        if(auth()->user())
        {
            if( auth()->user()->role==0)
            {
                return redirect('user');
            }elseif ( auth()->user()->role==1)
            {
                return redirect ('admin');
            }
        }
    }
}

