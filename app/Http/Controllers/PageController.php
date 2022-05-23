<?php

namespace App\Http\Controllers;

use App\Trains;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index()
    {
        $data = Trains::all();
        return view('home');
    }
}
