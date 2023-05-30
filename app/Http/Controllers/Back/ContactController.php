<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $contacts=Contact::orderBy('created_at','desc')->get();
        return view('back.contacts.index',compact('contacts'));
    }
}
