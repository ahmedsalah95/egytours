<?php

namespace App\Http\Controllers;

use App\Category;
use App\Gallery;
use App\Plan;
use App\Trip;
use App\Visitor;
use Illuminate\Http\Request;

class TripsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function index()
    {

        $dataOfTrip = Trip::paginate(3);


        return view('dashboard.pages.trips.index', ['data' => $dataOfTrip]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.pages.trips.addTrip', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request, [
            'category_id' => 'required',
            'image' => 'required|image',
            'description' => 'required|nullable',
            'title' => 'required',
            'no_of_visitors' => 'required',
            'price_of_visitor' => 'required',
            'inclusion'=>'required',
            'exclusion'=>'required',


        ]);


        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $path = "img/alt_images";
        $file->move($path, $filename);

        $tripData = new Trip();

        $tripData->image = $filename;

        $tripData->title = $request['title'];

        $tripData->category_id = $request['category_id'];
        $tripData->description = $request['description'];
        $tripData->inclusion = $request['inclusion'];
        $tripData->exclusion = $request['exclusion'];
        $tripData->save();

        $visitorData = new Visitor();

        $visitorData->trip_id = $tripData->id;

        $visitorNumber = count($request->no_of_visitors);


        for ($i = 0; $i < $visitorNumber; $i++) {
            $visitorData = new Visitor();
            $visitorData->trip_id = $tripData->id;


            $visitorData->price_of_visitor = $request->price_of_visitor[$i];


            $visitorData->no_of_visitors = $request->no_of_visitors[$i];
            $visitorData->save();
        }


        foreach ($request->file('images') as $image) {
            $destinationPath = "img/alt_images";
            $filename = $image->getClientOriginalName();
            $image->move($destinationPath, $filename);

            $galleryData = new Gallery();
            $galleryData->trip_id = $tripData->id;
            $galleryData->image = $filename;
            $galleryData->save();
        }

        return redirect('trip');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $dataOfTrips = Trip::where('id', $id)->first();
        $visitors = Visitor::where('trip_id', $id)->get();

        return view('dashboard.pages.trips.updateTrip')->with([
            'id' => $id,
            'categories' => $categories,
            'dataOfTrips' => $dataOfTrips,
            'visitors' => $visitors
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'category_id' => 'required',
            //'image' => 'image',
            'description' => 'required|nullable',
            'inclusion'=>'required',
            'exclusion'=>'required',
            'title' => 'required',
            'no_of_visitors' => 'required',
            'price_of_visitor' => 'required',


        ]);


        $file = $request->file('image');
        $tripData = Trip::where('id', $id)->first();
        if ($file) {
            $filename = $file->getClientOriginalName();
            $path = "img/alt_images";
            $file->move($path, $filename);
            $tripData->image = $filename;
        }



            $tripData->title = $request['title'];

        $tripData->category_id = $request['category_id'];
        $tripData->description = $request['description'];
        $tripData->inclusion = $request['inclusion'];
        $tripData->exclusion = $request['exclusion'];

        $tripData->save();


        Visitor::where('trip_id', $id)->delete();

        $visitorNumber = count($request->no_of_visitors);

        for ($i = 0; $i < $visitorNumber; $i++) {
            $visitorData = new Visitor();
            $visitorData->trip_id = $tripData->id;


            $visitorData->price_of_visitor = $request->price_of_visitor[$i];


            $visitorData->no_of_visitors = $request->no_of_visitors[$i];
            $visitorData->save();
        }


        $oldImage = Gallery::where('trip_id', $id)->delete();

        if ($request->file('images')) {
            foreach ($request->file('images') as $image) {
                $destinationPath = "img/alt_images";
                $filename = $image->getClientOriginalName();
                $image->move($destinationPath, $filename);

                //$galleryData = Gallery::where('trip_id',$id)->first();

                $galleryData = new Gallery();
                $galleryData->trip_id = $tripData->id;
                $galleryData->image = $filename;
                $galleryData->save();
            }
        }


        return redirect('trip');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Trip::where('id', $id)->first();


        $data->visitor()->delete();


        $data->delete();

        return redirect('trip');
    }

    // plan trip page function
    public function planTripSubmit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email'=>'required|email',
            'nationality'=>'required',
            'whatsapp'=>'required',
            'coin'=>'required',
            'plan'=>'required',

        ]);

        $savePlan= new Plan();

        $savePlan->name = $request['name'];
        $savePlan->email= $request['email'];
        $savePlan->nationality = $request['nationality'];
        $savePlan->whatsapp   = $request['whatsapp'];
        $savePlan->coin      = $request['coin'];
        $savePlan->plan      = $request['plan'];

        $savePlan->save();
        return redirect('planTrip')->with('message','trip sent successfully!');
    }

    public function plannedTrips()
    {
        $data = Plan::all();

        return view('dashboard.pages.tripPlanning.index',['data'=>$data]);
    }

    public function deleteTrip($id)
    {
        Plan::where('id',$id)->delete();

        return redirect('plannedTrips');
    }

    public function showPlan($id)
    {
        $data = Plan::where('id',$id)->first();
        return view('dashboard.pages.tripPlanning.show',['data'=>$data]);
    }

    public function search(Request $request)
    {
        $this->validate($request, [
            'search'=>'required',
        ]);


        $queryData = Trip::where('title', 'like', '%'.$request['search'].'%' )->get();

      return view('frontend.Trips',['queryData'=>$queryData]);

    }
}
