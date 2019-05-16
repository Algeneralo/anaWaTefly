<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function index()
    {
        $user=User::where('','')->get();
        $user->update(['name'=>'new name']);
        $user->save();
        return view("welcome");
    }
}
