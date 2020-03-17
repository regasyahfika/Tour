<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourCtrl extends Controller
{
    public function index()
    {
        return view('tour');
    }

    public function getApi(Request $request)
    {
        dd($request);
    }
}
