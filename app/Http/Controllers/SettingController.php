<?php

namespace App\Http\Controllers;

use App\setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $data = setting::all();


        return view('dashboard.pages.settings',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image'=>'image',
            'phone'=>'required',
            'email'=>'required|email',
            'address'=>'required',
            'description'=>'required',
            'facebook'=>'required',
            'twitter'=>'required',
            'twitter'=>'required',
            'instagram'=>'required',
            'youtube'=>'required',
            'link1'=>'required',
            'link2'=>'required',
            'link3'=>'required',
            'link4'=>'required',

        ]);

        $currentData = setting::first();

        $file = $request->file('image');
        if($file)
        {
            $filename = $file->getClientOriginalName();
            $path = "img/alt_images";
            $file->move($path,$filename);

            $currentData->image = $filename;
        }


        $currentData->phone =$request['phone'];
        $currentData->email =$request['email'];
        $currentData->address =$request['address'];
        $currentData->description =$request['description'];
        $currentData->facebook =$request['facebook'];
        $currentData->twitter =$request['twitter'];
        $currentData->instagram =$request['instagram'];
        $currentData->youtube =$request['youtube'];
        $currentData->link1 =$request['link1'];
        $currentData->link2 =$request['link2'];
        $currentData->link3 =$request['link3'];
        $currentData->link4 =$request['link4'];

        $currentData->save();

        return back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(setting $setting)
    {
        //
    }
}
