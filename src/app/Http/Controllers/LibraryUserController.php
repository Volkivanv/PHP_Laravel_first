<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryUserController extends Controller
{
    protected $users = [
        ['id' => 0, 'username' => 'user1', 'first_name' => 'Vasily', 'last_name' => 'Pupkin', 'list_of_books' => ['book1', 'Book2', 'book3']],
        ['id' => 1, 'username' => 'user2', 'first_name' => 'Teodor', 'last_name' => 'Ruswelt', 'list_of_books' => ['book6', 'Book8', 'book4']]

    ];

    public function show($id)
    {
        return view('user2',['user' => $this->users[$id]]);
    }
}
