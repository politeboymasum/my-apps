<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function myPortfolio()
    {
        return view('myPortfolio');
    }
    public function gallery()
    {
        return view('gallery');
    }
}
