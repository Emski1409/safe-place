<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignUp extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'telephone',
        'email',
        'password',
        'address_1',
        'address_2',
        'city',
        'postcode',
        'user_id',
    ];
    public function url()
     {
        //  return route('contacts.show',$this->id);
     }

 }

