<?php

namespace App\Http\Controllers;
use App\Models\SignUp;
use App\post;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    private function index(Request $request, $signUp)
    {
        
        // extract search param from request
        $search = $request->input('search');

        // pass to the view for rendering!
        return view('signUp', compact('signUp'));
    }

    public function show(Contact $signUp)
    {
        return view('signup/show',compact('signUp'));
    }

   
    //show the form for creating a sign up
    public function create()
    {
        $user = User::find(1);

        $signups = $user->signups;


        return view ('signup/create', compact('signUp'));
    }

    public function store(Request $signUp)
    {      
        //1 Take the input from the request
        $firstname=$request->input('firstname');
        $lastname = $request->input ('lastname');
        $telephone = $request->input ('telephone');
        $email = $request->input ('email');
        $password=$request->input('password');
        $address=$request->input('address_1');
        $address_2=$request->input('address_2');
        $city=$request->input('city');
        $postcode=$request->input('postcode');

        //2 create a new model of a contact (instance + row)

        $signUp = Contact::create([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'telephone'=> $telephone,
            'email' => $email,
            'password' =>$password,
            'address_1'=>$address,
            'address_2'=>$address_2,
            'city'=>$city,
            'postcode'=>$postcode,
            'user_id' => 1,
        ]);
        //3 Return a redirect to the detail page for the movie
        //return redirect($contact->url());
    }
}
