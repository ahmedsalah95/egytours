<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = contact::all();
        return view('dashboard.pages.contact.index',['data'=>$data]);
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

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'map'=>'required',
            'page_title' => 'required',
            'description' => 'required',
        ]);
        $currentData = contact::first();

        $currentData->map = $request['map'];
        $currentData->page_title=$request['page_title'];
        $currentData->description =$request['description'];

        $currentData->save();

        return redirect('contact');
    }


}
