<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicesRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function edit(Service $id){
        $data = $id;
        return view("backoffice/service/edit_service", compact("data"));
    }



    public function update(Service $id,Request $request){
    
    $data = $id;
    $data->description = $request->description;
    $data->subtitle1 = $request->subtitle1;
    $data->sub1description = $request->sub1description;
    $data->sub2description = $request->sub2description;
    $data->subtitle3 = $request->subtitle3;
    $data->sub3description = $request->sub3description;
    $data->subtitle4 = $request->subtitle4;
    $data->subtitle4description = $request->subtitle4description;
    $data->subtitle5 = $request->subtitle5;
    $data->sub5description = $request->sub5description;
    $data->subtitle6 = $request->subtitle6;
    $data->sub6description = $request->sub6description;
    $data->save();
    return redirect()->back();
    }
}
