<?php

namespace App\Http\Controllers;

use App\About;
use App\Category;
use App\Trip;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function index()
    {
        $data = Category::paginate(3);
        return view('dashboard.pages.category.index',['data'=>$data]);
    }


    public function create()
    {
        return view('dashboard.pages.category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [

            'name' => 'required',
            'description' => 'required',
        ]);

        $saveData = new Category();

        $saveData->name = $request['name'];
        $saveData->description = $request['description'];

        $saveData->save();

        return redirect('category');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $data = Category::where('id',$id)->first();
        return view('dashboard.pages.category.updateCategory',['id'=>$id,'data'=>$data]);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'=>'required',
            'description' => 'required',

        ]);

        $currentData=Category::where('id',$id)->first();
        $currentData->name = $request['name'];
        $currentData->description=$request['description'];
        $currentData->save();

        return redirect('category');

    }


    public function destroy($id)
    {
        $data = Category::where('id',$id)->first();
        $data->delete();

        return redirect('category');
    }

    public function showCategoryWithId($id)
    {
        $data = Trip::where('category_id',$id)->get();

        return view('frontend.Trips')->with(['data'=>$data]);
    }

    public function singleTrip($id)
    {
        $data = Trip::where('id',$id)->first();

        return view('frontend.SinglePage')->with(['data'=>$data]);
    }
}
