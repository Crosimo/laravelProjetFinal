<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function index(){
        $about = About::all();
        $contact = Contact::all();
        $portfolio = Portfolio::all();
        $service = Service::all();
        $skill = Skill::all();
        return view('backoffice/backoffmain', compact("about", "contact", "portfolio", "service", "skill"));
    }
}
