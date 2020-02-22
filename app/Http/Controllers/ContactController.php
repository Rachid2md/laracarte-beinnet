<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;

class ContactController extends Controller
{
    public function create()
    {
    	return view('contacts.create');
    } 

    public function store(ContactsRequest $request)
    {
    } 
}
