<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\post;

use Illuminate\Http\Request;

class ContactController extends Controller
{
        private function index(Request $request, $contacts)
        {
            
            // extract search param from request
            $search = $request->input('search');

            // pass to the view for rendering!
            return view('contacts', compact('contacts'));
        }

        public function show(Contact $contact)
        {
            return view('contacts/show',compact('contact'));
        }

       
        //show the form for creating a contact
        public function create()
        {
            $user = User::find(1);

            $contacts = $user->contacts;


            return view ('contacts/create', compact('contacts'));
        }

        public function store(Request $request)
        {      
            //1 Take the input from the request
            $firstname=$request->input('firstname');
            $lastname = $request->input ('lastname');
            $telephone = $request->input ('telephone');
            $email = $request->input ('email');
            

            //2 create a new model of a contact (instance + row)

            $contact = Contact::create([
                'firstname' => $firstname,
                'lastname' => $lastname,
                'telephone'=> $telephone,
                'email' => $email,
                'user_id' => 1,
            ]);
            //3 Return a redirect to the detail page for the movie
            return redirect($contact->url());
        }
 }
