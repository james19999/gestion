<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // public function create(){


    //      return view('contact.create');
    // }
    public function create(){
        // $Eleves=Eleve::limit(10)->get();
        $Eleves=Eleve::all();

         return view('contact.create',compact('Eleves'));
    }
}