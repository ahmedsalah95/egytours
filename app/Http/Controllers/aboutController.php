<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = About::paginate(3);



        return view('dashboard.pages.about.index',['data'=>$data]);
    }

    public function showAddAbout()
    {
        return view('dashboard.pages.about.addAbout');
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
            'image'=>'required|image',
            'title' => 'required',
            'description' => 'required',
        ]);


        $saveAbout = new About();

        $file = $request->file('image');
        if($file)
        {
            $filename = $file->getClientOriginalName();
            $path = "img/alt_images";
            $file->move($path,$filename);

            $saveAbout->image = $filename;
        }

        $saveAbout->description= $request['description'];
        $saveAbout->title= $request['title'];

        $saveAbout->save();

        return redirect('about');

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
        return view('dashboard.pages.about.updateAbout',['id'=>$id]);
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

        $this->validate($request, [
            'image'=>'image',
            'title' => 'required',
            'description' => 'required',
        ]);

        $currentData=About::where('id',$id)->first();

        $file = $request->file('image');
        if($file)
        {
            $filename = $file->getClientOriginalName();
            $path = "img/alt_images";
            $file->move($path,$filename);

            $currentData->image = $filename;
        }

       // $currentData->image = $filename;
        $currentData->title = $request['title'];
        $currentData->description = $request['description'];
        $currentData->save();

        return redirect('about');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $data = About::where('id',$id)->first();
        $data->delete();

        return redirect('about');
    }
}
