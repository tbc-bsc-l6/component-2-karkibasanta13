<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Newsletter;


class HomeController extends Controller
{
    public function index(){
        return view ('welcome');
    }

    public function subscriber(Request $request){
        $request->validate([
            'subscriber'=>'required|email'
        ]);

        try {
            if(Newsletter::isSubscribed($request->subscriber))
            {
                return redirect()->back()->with('errors','Email already Subscribed');
            }
            else
            {
                Newsletter::subscribe($request->subscriber);
                return redirect()->back()->with('errors','Email Subscribed');
            }
        }
        catch (Exception $e){
            return redirect()->back()->with('errors',$e->getMessage);
        }
    }
}
