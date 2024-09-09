<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getData(){
        // $contacts = Contact::get();
        $contacts = Contact::with('student')->get();
        return $contacts;
    }
}
