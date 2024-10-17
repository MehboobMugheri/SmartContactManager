<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::with('user')->paginate(4);

        return view('admin',compact('contacts'));
        // if (Auth::check() && Auth::user()->role == "Admin" ) {
        // }
        //     elseif (Auth::check() && Auth::user()->role == "User") {
        //         return view('user',compact('contacts'));
        //    } 
        
           // elseif (Auth::check() && Auth::user()->role == "User") {
            //     return view('user');
            // }
            // else{
            //     return view('login');
            // }
        }
        // return $contacts;
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('newContact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contacts = $request->validate([
            'contact'   => 'required | numeric | min:12',
            'address'   => 'required',
            'image'     => 'required | mimes:jpeg,jpg,png,gif',
            'user_id'   => 'required | min:1 | max:1',
        ]);

        $insert = Contact::with('user')->Create($contacts);
        return view('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id )
    {
        $contacts = Contact::with('user')->findOrFail($id);
        if (Auth::user()->role == "Admin" && Auth::user()->id = $id) {
            return view('SingleContact',compact('contacts'));
        }
        if(Auth::user()->id = $id) {
                return view('SingleContact',compact('contacts'));
        }
        else {
            return view('login');
            
        }
    }   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contacts = Contact::with('user')->findOrFail($id);
        // return $editContact;
        return view('updateContact',compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contacts = Contact::with('user')->findOrFail($id);
        $request->validate([
            'name'      => 'required',
            'email'     => 'required | email',
            'age'       => 'required',
            'contact'   => 'required | numeric | min:12',
            'address'   => 'required',
            'image'     => 'required | mimes:jpeg,jpg,png,gif',
        ]);

            $request->update([
                $
            ]);

                return $contacts;
        // return redirect()->route('contacts.index');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contacts = Contact::with('user')->findOrFail($id);
        $contacts->delete ();

        return $contacts;

        return redirect()->route('contacts.index');
    }
}
