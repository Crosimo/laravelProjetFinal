<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    // public function index(){
    //     $data = About::all();
    //     return view("backoffice/about/edit_about", compact('data'));
    // }


    public function edit(About $id){
        $data = $id;
        return view("backoffice/about/edit_about", compact("data"));
    }



    public function update(About $id,AboutRequest $request){
    $request->validated();
    $data = $id;
    $data->description = $request->description;
    $data->qualification = $request->qualification;
    $data->description2 = $request->description2;
    $data->birthday = $request->birthday;
    $data->siteweb = $request->siteweb;
    $data->phone = $request->phone;
    $data->city = $request->city;
    $data->age = $request->age;
    $data->degree = $request->degree;
    $data->email = $request->email;
    $data->status = $request->status;
    $data->description3 = $request->description3;
    $data->save();
    return redirect()->back();
    }


}
