<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\User;
use App\post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
        private function index(Request $request, $contacts)
        {
            
            // extract search param from request
            $search = $request->input('search');

            // pass to the view for rendering!
            return view('contacts', compact('contacts'));
        }

        public function show()
        {   
            $contacts = Auth::user()->contacts;
            //$contacts = User::find(2)->contacts;

            return view('contacts/show',compact('contacts'));
        }

       
        //show the form for creating a contact
        public function create()
        {
            
            return Auth::user();
            // $user = User::find(1);

            // $contacts = $user->contacts;


            // return view ('contacts/create', compact('contacts'));
        }

        public function store(Request $request)
        {
            $input = $request->validate([
                'firstname' => 'required|max:255',
                'lastname' => 'required',
                'telephone'=> 'required|min:11',
                'email'=> 'required|unique:contacts',

            ]);

            // $contact = Contact::create([
            //     'user_id'=> Auth::id(),
            //     'user_id'=> Auth::user()->id
            //]);

             
                //1 Take the input from the request
                $firstname=$request->input('firstname');
                $lastname = $request->input ('lastname');
                $telephone = $request->input ('telephone');
                $email = $request->input ('email');
            

           // 2 create a new model of a contact (instance + row)

            $contact = Contact::create([
                'firstname' => $firstname,
                'lastname' => $lastname,
                'telephone'=> $telephone,
                'email' => $email,
                'user_id'=> Auth::id(),
            ]);
            //3 Return a redirect to the detail page for the movie
            return redirect($contact->url());
        }
 }
