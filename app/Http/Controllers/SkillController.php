<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillRequest;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function edit(Skill $id){
        $data = $id;
        return view("backoffice/skills/edit_skills", compact("data"));
    }



    public function update(Skill $id,Request $request){
    $request->validate([
        "skill1"=>"required",
        "pourcent_skill1"=>["required"],
        "skill2"=>["required"],
        "pourcent_skill2"=>["required"],
        "skill3"=>["required"],
        "pourcent_skill3"=>["required"],
        "skill4"=>["required"],
        "pourcent_skill4"=>["required"],
        "skill5"=>["required"],
        "pourcent_skill5"=>["required"],
        "skill6"=>["required"],
        "pourcent_skill6"=>["required"],
        "description"=>["required"],

    ]);
    $data = $id;
    $data->description = $request->description;
    $data->skill1 = $request->skill1;
    $data->pourcent_skill1 = $request->pourcent_skill1;
    $data->skill2 = $request->skill2;
    $data->pourcent_skill2 = $request->pourcent_skill2;
    $data->skill3 = $request->skill3;
    $data->pourcent_skill3 = $request->pourcent_skill3;
    $data->skill4 = $request->skill4;
    $data->pourcent_skill4 = $request->pourcent_skill4;
    $data->skill5 = $request->skill5;
    $data->pourcent_skill5 = $request->pourcent_skill5;
    $data->skill6 = $request->skill6;
    $data->pourcent_skill6 = $request->pourcent_skill6;
    $data->save();
    return redirect()->back();
    }
}
