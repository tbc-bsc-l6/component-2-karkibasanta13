<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        if ( ! Newsletter::isSubscribed($request->email) )
        {
            Newsletter::subscribePending($request->email);
            return redirect('welcome')->with('success', 'Thanks For Subscribe');
        }
        return redirect('welcome')->with('failure', 'Sorry! You have already subscribed ');

    }
}
