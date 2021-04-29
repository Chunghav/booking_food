<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
   public function aboutpage(){
       return view('pages.about');
   }

   public function contactpage(){
    return view('pages.contact');
}

public function newspage(){
    return view('pages.news');
}

public function orderpage(){
    return view('pages.order');
}

public function homepage(){
    return view('pages.homepage');
}

public function master(){
    return view('pages.master');
}


}
