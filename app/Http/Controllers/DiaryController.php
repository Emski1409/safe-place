<?php

namespace App\Http\Controllers;
use App\Models\Diary;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DiaryController extends Controller
{
    private function index(Request $request, $diary)
        {
            
            // extract search param from request
            $search = $request->input('search');

            // pass to the view for rendering!
            return view('diary', compact('diary'));
        }

        public function show(Diary $diarys)
        {
            // $diary = Auth::user()->diary;
               
            return view('pages/diary',compact('diarys'));
        }


            //show the form for creating a contact
            public function create()
            {
                
                return Auth::user();
            

            }

            public function store(Request $request)
            {
                $input = $request->validate([
                    'Title' => 'required|max:255',
                    'date' => 'required',
                    'comment'=> 'required|max:500',
            

                ]);


                
                    //1 Take the input from the request
                    $title=$request->input('title');
                    $date = $request->input ('date');
                    $comment = $request->input ('comment');
                

            // 2 create a new model of a contact (instance + row)

                $diary = Diary::create([
                    'title' => $title,
                    'date' => $date,
                    'comment'=> $comment,
                    'user_id'=> Auth::id(),
                ]);
                //3 Return a redirect to the detail page for the contact
                return redirect($diary->url());
                }
 }

