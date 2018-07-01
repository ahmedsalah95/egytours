<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{


    public  function submitContact(Request $request)
    {
        $this->validate($request, [

            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required',
        ]);



        $data = new ContactUs();
        $data->email = $request['email'];
        $data->subject=$request['subject'];
        $data->message=$request['message'];

        $data->save();

        return redirect('contactUS')->with('message','trip sent successfully!');
    }

    public  function showMessages()
    {
        $data = ContactUs::all();
        return view('dashboard.pages.contactUs.index',['data'=>$data]);
    }


    public  function deleteMessage($id)
    {
        ContactUs::where('id',$id)->delete();

        return redirect('messages');
    }

    public function showMessage($id)
    {
        $data = ContactUs::where('id',$id)->first();

        return view('dashboard.pages.contactUs.show',['data'=>$data]);
    }
}
