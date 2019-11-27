<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponsibilityController extends Controller
{

    public function index()
    {
        return view('responsibility.index');
    }
}
