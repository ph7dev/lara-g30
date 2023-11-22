<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $date = date('Y-m-d');
        return view('home', ['date' => $date]);
    }
}
