<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestTestController extends Controller
{
    //
    public function testRequest(Request $request)
    {
        // $firstName = $request->input('first_name', 'No name');
        // $lastName = $request->input('last_name', 'No name');
        // echo $firstName . ' ' . $lastName;

        // $requestParameters = $request->all();
        // echo $requestParameters['first_name'];

        //Вся коллекция
        // $requestParameters = $request->collect();
        // var_dump($requestParameters);
        $requestParameters = $request->collect();
        $requestParameters->each(function($field){
            echo $field . ' ';
        });
    }
}
