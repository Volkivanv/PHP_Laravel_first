<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    // public function __invoke(){
    //     DB::connection('mysql')->table('user')->insert(['first_name' => 'Nikolai0', 'last_name' => 'Nikolaevich', 'email' => 'Nikolay@gmail.com']);

    //     DB::connection('mysql')->table('user')->insert(['first_name' => 'Nikolai1', 'last_name' => 'Nikolaevich', 'email' => 'Nikolay@gmail.com']);


    //     DB::connection('mysql')->table('user')->insert(['first_name' => 'Nikolai2', 'last_name' => 'Nikolaevich', 'email' => 'Nikolay@gmail.com']);

    //     $users = DB::connection('mysql')->table('user')->select(['first_name', 'email'])->get();
    //     return view('user', ['users' => $users]);
    // }
    public function index()
    {

        // DB::connection('second_mysql')->table('user')->insert(['first_name' => 'Nikolai0', 'last_name' => 'Nikolaevich', 'email' => 'Nikolay@gmail.com']);

        // DB::connection('second_mysql')->table('user')->insert(['first_name' => 'Nikolai1', 'last_name' => 'Nikolaevich', 'email' => 'Nikolay@gmail.com']);


        // DB::connection('second_mysql')->table('user')->insert(['first_name' => 'Nikolai2', 'last_name' => 'Nikolaevich', 'email' => 'Nikolay@gmail.com']);

        $users = DB::connection('second_mysql')->table('user')->select(['first_name', 'email'])->get();
        return view('user', ['users' => $users]);

        //   return view('test');
    }
    public function store(Request $request)
    {
        $userData = ['User name' => $request->username, 'email' => $request->email];
        return response()->json($userData);
    }
}
