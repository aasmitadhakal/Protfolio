<?php

namespace App\Http\Controllers\admin;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $contact = Contact::all();
        return view("admin.contact.index", compact("contact"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contact.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        $contact = Contact::create($input);
        return redirect()->back()->with("success", "contact added successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
        return view("admin.contact.show", compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
        $contact->delete();
        return redirect()->route("contact.index")->with("sucess", "Contact deleted sucessfully");
    }
}