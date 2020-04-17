<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function form()
    {
        return view('form');
    }
    public function confirm(Request $request)
    {
        $contact = new Contact($request->all());

        return view('confirm', compact('contact'));
    }
    public function process(Request $request)
    {
        return view('complete');
    }
}