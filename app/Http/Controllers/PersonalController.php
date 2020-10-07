<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\DB;

class PersonalController extends Controller
{
    public function show()
    {
        $images = DB::table('images')->where('favourited', 1)->limit(2)->get();
        return view('pages/personal_page',compact('images'));
    }
}
