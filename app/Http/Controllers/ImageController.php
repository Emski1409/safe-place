<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    private function index(Request $request, $image)
    {
        
        // extract search param from request
        $search = $request->input('search');

        // pass to the view for rendering!
        return view('images', compact('images'));
    }

    public function create()
    {
        return Auth::user();
    }

    public function store(Request $request)
    {
        $input=request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = 'storage/'.$request->file('image')->store('images', 'public');

         $image = Image::create([
             'path'=>$path,
             'favourited'=>false,
             'user_id'=> Auth::id(),

         ]);   


        // $imageUpload = Auth::user()->imageUploads()->create([
        //     'path' => $path,
        //     'favourited' => false
        // ]);


        $imageName = time().'.'.request()->image->getClientOriginalExtension();

  

        request()->image->move(public_path('images'), $imageName);

  

        return back()

            ->with('success','You have successfully uploaded an image.')

            ->with('image',$imageName);
        
         return redirect($image->url());

    }

    public function show(Image $image)
    {
        $images = Auth::user()->images;
           
        return view('pages/images',compact('images'));
    }
    
    public function destroy(Image $image)
    {
        $image->delete();
        

        return redirect("/image");
       
    }

   
}
