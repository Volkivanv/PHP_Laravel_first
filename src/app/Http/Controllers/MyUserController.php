<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;

use Illuminate\Http\Request;

class MyUserController extends Controller
{
    //
    public function showUser()
    {
        $user = new \StdClass();
        $user->first_name = 'Test';
        $user->last_name = 'User';
        $user->id = 1;

        // $json = json_encode($user);
        // $response = new Response($json);
        // $response->header('Content-type', 'application/json');



        return response()->json($user);
    }
}
