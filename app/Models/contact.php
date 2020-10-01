<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
 {
    protected $fillable = [
        'firstname',
        'lastname',
        'telephone',
        'email',
        'user_id'
     ];

     public function url()
     {
         return route('contacts.show',$this->id);
     }

 }
