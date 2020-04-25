<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Room_Type;
use App\Model\Room;
use App\Model\Service;
use App\Model\Tag;
use App\Model\Image;
use Illuminate\Support\Str;
use Session;


class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $value = Room::orderBy('created_at', 'desc')->get();
        return view('admin.room.index', compact('value'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $room_type = Room_Type::pluck('name','id')->toArray();
        $tags = Tag::pluck('name', 'id')->toArray();
        $services = Service::pluck('name', 'id')->toArray();
        return view('admin.room.create',compact('room_type','tags','services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room_id = Room::insertGetId([
            'name' => $request->name,
            'description' => $request->description,
            'room_code' =>  Str::random(10),
            'acreage' => $request->acreage,
            'room_type_id' => $request->roomtype_id
        ]);
        $room_data = Room::findOrFail($room_id);

        $image_data = new Image([
            'avatar' => $request->avatar,
            'image_header' => $request->image_header,
            'image_body' => $request->image_body,
            'room_id' => $request->$room_id
        ]);

        $room_data->image()->save($image_data);

        $tag_list = $request->tags;
        $service_list = $request->services;
        $room_data->tag()->attach($tag_list);
        $room_data->service()->attach($service_list);

        if ($room_data) {
            return redirect('admin/room')->with('warning','Save success');
        }else {
            return back()->with('erro','Save Erro');
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
