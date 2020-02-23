<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageCreated;
use App\Http\Requests\ContactsRequest;

class ContactController extends Controller
{
    public function create()
    {
    	return view('contacts.create');
    } 

    public function store(ContactsRequest $request)
    {
    	$mailable = new ContactMessageCreated($request->name, $request->email, $request->message);
    	Mail::to(config('laracarte.admin_support_email'))->send($mailable);
    	flashy('Nous répondrons sous peu !');
    	return Redirect()->route('root_path');
    } 
}
