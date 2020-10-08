<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;

class ValidateController extends Controller
{
  public function Index() {

  

        return URL::temporarySignedRoute(
            'unsubscribe', now()->addMinutes(30), ['user' => 1]
);
  }

}
