<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = Testimonial::all();

        return view('dashboard.pages.testimonial.index',['data'=>$data]);
    }

    public function create()
    {
        return view('dashboard.pages.testimonial.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'image'=>'required|image',
            'title' => 'required',
            'description' => 'required',
        ]);

        $saveTestimonial = new Testimonial();
        $file = $request->file('image');
        if($file)
        {
            $filename = $file->getClientOriginalName();
            $path = "img/alt_images";
            $file->move($path,$filename);
            $saveTestimonial->image = $filename;
        }

        $saveTestimonial->description= $request['description'];
        $saveTestimonial->title= $request['title'];

        $saveTestimonial->save();

        return redirect('testimonial');
    }

    public function edit($id)
    {
        $d = Testimonial::where('id',$id)->first();
        return view('dashboard.pages.testimonial.updateTestimonial',['id'=>$id,'d'=>$d]);
    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'image'=>'image',
            'title' => 'required',
            'description' => 'required',

        ]);

        $currentData=Testimonial::where('id',$id)->first();
        $file = $request->file('image');
        if($file)
        {
            $filename = $file->getClientOriginalName();
            $path = "img/alt_images";
            $file->move($path,$filename);
            $currentData->image = $filename;
        }

        $currentData->title = $request['title'];
        $currentData->description = $request['description'];
        $currentData->save();

        return redirect('testimonial');
    }


    public function destroy($id)
    {

        $data = Testimonial::where('id',$id)->first();
        $data->delete();

        return redirect('testimonial');
    }
}
