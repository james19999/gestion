<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(){
        $Eleves=Eleve::all();

         return view('contact.create');
    }
}