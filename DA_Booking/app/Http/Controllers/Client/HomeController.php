<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Room;
use App\Model\Room_Type;
class HomeController extends Controller
{
    public function home()
    {
    	$value = Room::orderBy('created_at', 'desc')->get();
    	return view('client/Home/index',compact('value'));
    }

    public function showrom($id)
    {
    	$data_roomtype = Room_Type::all();
    	$data = Room::findOrFail($id);
    	$value = Room::findOrFail($id);
    	return view('client.room.roomssingle',compact('data','value','data_roomtype'));
    }
}
