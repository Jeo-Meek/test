<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function store(Request $request)
    {
        if (in_array(['name','email']))
        {
            $request->all();
            User::create(['']);
        }
    }


}
