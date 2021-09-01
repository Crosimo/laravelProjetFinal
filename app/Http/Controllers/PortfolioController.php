<?php

namespace App\Http\Controllers;

use App\Http\Requests\PortFolioRequest;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function edit(Portfolio $id){
        $data = $id;
        return view("backoffice/portfolio/edit_portfolio", compact("data"));
    }

    public function create(){

        return view('backoffice/portfolio/create_portfolio');
    }

    public function store(Request $request){
        $request->validate([
            "photo1"=>["required"],
            "photo2"=>["required"],
            "photo3"=>["required"],
            "photo4"=>["required"],
            "photo5"=>["required"],
            "photo6"=>["required"],
            "photo7"=>["required"],
            "photo8"=>["required"],
            "photo9"=>["required"],
            "description"=>["required"],
        ]);
        $data = new Portfolio();
        $data->description = $request->description;
        $data->photo1 = $request->photo1;
        $data->photo2 = $request->photo2;
        $data->photo3 = $request->photo3;
        $data->photo4 = $request->photo4;
        $data->photo5 = $request->photo5;
        $data->photo6 = $request->photo6;
        $data->photo7 = $request->photo7;
        $data->photo8 = $request->photo8;
        $data->photo9 = $request->photo9;
        $data->save();
        return redirect()->back();
    }

    public function update(Portfolio $id,Request $request){
    $request->validate([
        "photo1"=>["required"],
        "photo2"=>["required"],
        "photo3"=>["required"],
        "photo4"=>["required"],
        "photo5"=>["required"],
        "photo6"=>["required"],
        "photo7"=>["required"],
        "photo8"=>["required"],
        "photo9"=>["required"],
        "description"=>["required"],
    ]);
    $data = $id;
    $data->description = $request->description;
    $data->photo1 = $request->photo1;
    $data->photo2 = $request->photo2;
    $data->photo3 = $request->photo3;
    $data->photo4 = $request->photo4;
    $data->photo5 = $request->photo5;
    $data->photo6 = $request->photo6;
    $data->photo7 = $request->photo7;
    $data->photo8 = $request->photo8;
    $data->photo9 = $request->photo9;
    $data->save();
    return redirect()->back();
    }
}
