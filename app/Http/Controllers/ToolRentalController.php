<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolRentalController extends Controller
{
    public function index()
    {
        return view('tool-rental.index');
    }
}
