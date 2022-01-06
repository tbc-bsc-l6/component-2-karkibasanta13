<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resources\view\products\book;

class ProductController extends Controller
{
   public function input(Request $request)
   {
       Post::create([
           'type' => $request -> type,
           'firstname' =>$request ->firstname,
           'mainname' =>$request -> mainname,
           'title' =>$request -> title,
           'numpages' =>$request -> numpages,
           'price' =>$request -> price
       ]);
   }
}
