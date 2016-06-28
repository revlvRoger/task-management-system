<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }


    public function home()
    {
    $people = ['Roger','Jaeson','Brian'];
    return view('welcome', compact('people'));
    }
}
