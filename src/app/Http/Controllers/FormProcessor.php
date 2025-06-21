<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessor extends Controller
{
    //
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $userData = ['username' => $request->username, 'last_name' => $request->last_name, 'email' => $request->email];
        return view('greater', ['user'=>$userData]);
       // return response()->json($userData);
    }
}
