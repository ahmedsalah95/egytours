<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;

class HomeSettingsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Home::all();
        return view('dashboard.pages.home.index',['data'=>$data]);
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'image'=>'image',
            'section_5_image' => 'image',
            'title' => 'required',
            'section_3_title'=>'required',
            'section_3_desc'=>'required',
            'section_5_title'=>'required',
            'section_5_desc'=>'required',
        ]);
        $currentData = Home::first();
       // $currentData = new Home();
        $file = $request->file('image');
        $file_section_5 =$request->file('section_5_image');
        $path = "img/alt_images";
        if($file)
        {
            $filename = $file->getClientOriginalName();
            $file->move($path,$filename);
            $currentData->image = $filename;
        }

        if($file_section_5)
        {
            $filename_section_5 = $file_section_5->getClientOriginalName();
            $file_section_5->move($path,$file_section_5);
            $currentData->section_5_image = $filename_section_5;
        }




        $currentData->title = $request['title'];
        $currentData->section_3_title = $request['section_3_title'];
        $currentData->section_3_desc = $request['section_3_desc'];
        $currentData->section_5_title = $request['section_5_title'];
        $currentData->section_5_desc = $request['section_5_desc'];


        $currentData->save();

        return redirect('homeSettings');
    }

}
