<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function edit(Contact $id){
        $data = $id;
        return view("backoffice/contact/edit_contact", compact("data"));
    }



    public function update(Contact $id,ContactRequest $request){
    $request->validated();
    $data = $id;
    $data->description = $request->description;
    $data->location = $request->location;
    $data->phone = $request->phone;
    $data->email = $request->email;
    $data->save();
    return redirect()->back();
    }
}
