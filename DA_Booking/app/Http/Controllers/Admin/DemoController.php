<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    public function index()
    {
    	return view('welcome');
    }
    public function demo(){
    	return view('home');
    }
}
