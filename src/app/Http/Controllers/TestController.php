<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    // public function __invoke(){
    //     echo "Hello world";
    // }
    public function test(Request $request)
    {
        // echo $request->param;
        // echo $request->param2;
        $response = ['param1' => $request->param, 'param2' => $request->param2];
        // return new Response(json_encode($response));
        return response() -> json($response);
    }
}
