<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        return response()->json([
            'hello' => 'MacPaw Internship 2022!'
        ]);
    }
}
