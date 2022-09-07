<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckAgeController extends Controller
{
    public function index()     {

        return view("age-checker");

    }
    public function checkAge()
    {
        return view("home");
    }
}
