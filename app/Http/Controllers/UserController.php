<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.book', [
            'product' => DB::table('product')->paginate(5)
        ]);
    }
}
