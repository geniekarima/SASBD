<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboadrController extends Controller
{
    public function displayWelcome(){
        return view('User.index');

    }
}
