<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){

        return view("admin.index");
    }
    public function setting(){
        $data=Setting::first();
        return view("admin.setting",['data'=>$data]);
    }
    public function settingupdate(Request $request)
    {
        //

        $data=Setting::find( $request->id);
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->company = $request->company;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->fax = $request->fax;
        $data->email = $request->email;
        $data->smtpserver = $request->smtpserver;
        $data->smtppassword = $request->smtppassword;
        $data->smtpport = $request->smtpport;
        $data->facebook = $request->facebook;
        $data->instagram = $request->instagram;
        $data->twitter = $request->twitter;
        $data->youtube = $request->youtube;
        $data->aboutus = $request->aboutus;
        $data->contact = $request->contact;
        $data->references = $request->references;
        $data->status = $request->status;
        if($request->file('image')){
            $data->icon=$request->file('image')->store('images');
        };
        $data->save();
        return redirect('admin/setting');

    }
}
