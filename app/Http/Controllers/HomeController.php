<?php

namespace App\Http\Controllers;

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
        return view('public.home');
    }
    public function menu()
    {
        return view('public.menu');
    }

    public function redirect()
    {
        if (auth()->user()->is_admin) {
            return redirect()->route('admin.home')->with('status', session('status'));
        }

        return redirect()->route('client.home')->with('status', session('status'));
    }
}
