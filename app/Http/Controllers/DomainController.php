<?php

namespace App\Http\Controllers;

class DomainController extends Controller
{
    public function transfer()
    {
        return view('domains.transfer');
    }

    public function pricing()
    {
        return view('domains.pricing');
    }

    public function register()
    {
        return view('domains.register');
    }
}