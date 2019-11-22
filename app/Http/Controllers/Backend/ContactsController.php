<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Http\Requests\Backend\Contact\ContactPost;

class ContactsController extends Controller
{
    public function __construct()
    {
        $inboxContacts = Contact::where('type', 'receiver')->whereNull("deleted_at")->count();
        view()->share('inboxContacts', $inboxContacts );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::where('type', 'sender')->paginate('20');

        return view('backend.contacts.index', compact('contacts'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inbox()
    {
        $contacts = Contact::where('type', 'receiver')->whereNull("deleted_at")->paginate('20');

        return view('backend.contacts.inbox', compact('contacts'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function favourite()
    {
        $contacts = Contact::where('favourite', '=', TRUE)->paginate('20');

        return view('backend.contacts.favourites', compact('contacts'));
    }

    /**
     * Update the mail to be favourite
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function favouritePost(Request $request, $id)
    {
            $contact = Contact::findOrFail($id);

            $contact->update($request->all());
            
            if ($contact->favourite === '0') {
                
                session()->flash('success', 'The favourite message Changed successfully');
            }else {
                
                session()->flash('success', 'The favourite message added successfully');
            }

            return redirect()->route('contacts.index');
    }

    /**
     *  send mail message 2 the trash
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function trash(Request $request)
    {
        $contacts = Contact::onlyTrashed()->paginate('5');

        return view('backend.contacts.trash', compact('contacts'));
    }

    /**
     * restore a mail message
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function trashPost($id)
    {
        Contact::withTrashed()->find($id)->restore();

        session()->flash('success', 'The trashed message restored successfully');
        
        return redirect()->route('contacts.index');
    }

    /**
     * Force deletion of mail message
     * 
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function trashDestroy($id)
    {
        Contact::withTrashed()->find($id)->forceDelete();
        
        session()->flash('success', 'The mail / message deleted successfully');
        
        return redirect()->route('contacts.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Contact\ContactPost  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactPost $request)
    {
        Contact::create($request->all());
        
        \Mail::send('mail', ['request' => $request], function($message)  use ($request) {
                
                $message->to( $request->email , 'Tutorials Point')
                        ->subject($request->subject);

                $message->from('support@4soft-eg.com', $request->name);
            });

        session()->flash('success', 'Contact Mail sended successfully');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);
        
        return view('backend.contacts.show', compact('contact'));
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        session()->flash('success', 'contact mail deleted successfully');

        return redirect()->route('contacts.index');
    }
}
